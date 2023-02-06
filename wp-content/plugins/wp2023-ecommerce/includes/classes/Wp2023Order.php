<?php
    class Wp2023Order {
        private $_orders = '';
        private $_order_detail = '';
        public function __construct(){
            global $wpdb;
            $this->_orders = $wpdb->prefix.'wp2023_orders';
            $this->_order_detail = $wpdb->prefix.'wp2023_order_detail';
        }
        public function all(){
            global $wpdb;
            $sql = "SELECT * FROM $this->_orders ORDER BY id DESC";
            $items = $wpdb->get_results($sql);
            return $items;
        }
        public function paginate($limit = 3){
            global $wpdb;

            //Lấy các tham số trên url
            $paged  = isset($_GET['paged']) ? $_GET['paged'] : 1;
            $status = isset($_GET['status']) ? $_GET['status'] : '';
            $s      = isset($_GET['s']) ? $_GET['s'] : '';


            // Lấy tổng số records
            $sql = "SELECT COUNT(id) FROM $this->_orders WHERE deleted = 0";
            // Tìm kiếm
            if($status){
                $sql .= " AND status = '$status'";
            }
            if($s){
                $sql .= " AND ( customer_name LIKE '%$s%' OR customer_phone LIKE '%$s%' )";
            }
            $total_items = $wpdb->get_var($sql);

            // Thuật toán phân trang
            /*
            - Tìm ra tổng số trang: total_pages
            - Tính ra offset
            */
            $total_pages  = ceil($total_items/ $limit);
            $offset = ( $paged * $limit ) - $limit;

            $sql = "SELECT * FROM $this->_orders WHERE deleted = 0";
            // Tìm kiếm
            if($status){
                $sql .= " AND status = '$status'";
            }
            if($s){
                $sql .= " AND ( customer_name LIKE '%$s%' OR customer_phone LIKE '%$s%' )";
            }

            $sql .= " ORDER BY id DESC";
            $sql .= " LIMIT $limit OFFSET $offset";
            $items = $wpdb->get_results($sql);

            return [
                'items' => $items,
                'total_pages' => $total_pages,
                'total_items' => $total_items,
            ];
            
        }
        
        public function find($id){
            global $wpdb;
            $sql = "SELECT * FROM $this->_orders WHERE id = $id";
            $item = $wpdb->get_row($sql);
            return $item;
        }
        public function store($data){
            
        }
        public function update($id,$data){
            
        }
        public function destroy($id){
            
        }
        public function trash($id){
            global $wpdb;
            $wpdb->update( $this->_orders, [
                'deleted' => 1
            ], [
                'id' => $id
            ] );
        }
        public function change_status($id,$status){
            global $wpdb;
            $wpdb->update( $this->_orders, [
                'status' => $status
            ], [
                'id' => $id
            ] );
        }

        public function order_items($order_id){
            global $wpdb;
            $sql = "SELECT * FROM $this->_order_detail WHERE order_id = $order_id";
            $items = $wpdb->get_results($sql);
            return $items;
        }
    }