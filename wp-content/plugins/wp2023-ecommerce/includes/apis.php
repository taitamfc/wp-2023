<?php
add_action( 'rest_api_init','wp2023_apis');
function wp2023_apis(){
    $namespace = 'wp2023/v1';
    $base = 'orders';

    //http://yourdomain.com/wp-json/wp2023/v1/orders
    register_rest_route( $namespace, '/' . $base, array(
        array(
          'methods'             => WP_REST_Server::READABLE,
          'callback'            => 'wp2023_apis_order_all'
        ),
        array(
          'methods'             => WP_REST_Server::CREATABLE,
          'callback'            => 'wp2023_apis_order_store',
        ),
    ) );
    
    //http://yourdomain.com/wp-json/wp2023/v1/orders/{id}/order_items
    register_rest_route( $namespace, '/' . $base . '/(?P<id>[\d]+)/order_items', array(
        'methods'  => WP_REST_Server::READABLE,
        'callback' => 'wp2023_apis_order_items',
    ));
    
    //http://yourdomain.com/wp-json/wp2023/v1/orders/{id}
    register_rest_route( $namespace, '/' . $base . '/(?P<id>[\d]+)', array(
        array(
          'methods'             => WP_REST_Server::READABLE,
          'callback'            => 'wp2023_apis_order_show'
        ),
        array(
          'methods'             => WP_REST_Server::EDITABLE,
          'callback'            => 'wp2023_apis_order_update'
        ),
        array(
          'methods'             => WP_REST_Server::DELETABLE,
          'callback'            => 'wp2023_apis_order_destroy'
        ),
    ));
}


function wp2023_apis_order_all($request){
    $objWp2023Order = new Wp2023Order();
    $items          = $objWp2023Order->paginate(5);
    $data = [
        'success' => true,
        'data' => $items,
    ];
    return new WP_REST_Response( $data, 200 );
}
function wp2023_apis_order_store($request){
    // dd($_POST);
    $objWp2023Order = new Wp2023Order();
    $saved = $objWp2023Order->store($_POST);
    $data = [
        'success' => true,
        'data' => $saved,
    ];
    return new WP_REST_Response( $data, 201 );
}
function wp2023_apis_order_show($request){
    $id = $request['id'];
    $objWp2023Order = new Wp2023Order();
    $item          = $objWp2023Order->find($id);
    $data = [
        'success' => true,
        'data' => $item,
    ];
    return new WP_REST_Response( $data, 200 );
}
function wp2023_apis_order_update($request){
    $objWp2023Order = new Wp2023Order();
    $saved = $objWp2023Order->update($request['id'],$_POST);
    $data = [
        'success' => true,
        'data' => $saved,
    ];
    return new WP_REST_Response( $data, 200 );
}
function wp2023_apis_order_destroy($request){
    $objWp2023Order = new Wp2023Order();
    $deleted = $objWp2023Order->destroy($request['id']);
    $data = [
        'success' => true,
        'data' => $deleted,
    ];
    return new WP_REST_Response( $data, 200 );
}
function wp2023_apis_order_items($request){
    $id = $request['id'];
    $objWp2023Order = new Wp2023Order();
    $item          = $objWp2023Order->order_items($id);
    $data = [
        'success' => true,
        'data' => $item,
    ];
    return new WP_REST_Response( $data, 200 );
}