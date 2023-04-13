<?php
    require_once('./config/config.php');

    class Product {
        public $id;
        public $idCate;
        public $name;
        public $price;
        public $imgFile;
        public $description;
        public $quantity;

        function __construct($id, $idCate, $name, $price, $imgFile, $description, $quantity) {
            $this->id = $id;
            $this->idCate = $idCate;
            $this->name = $name;
            $this->price = $price;
            $this->imgFile = $imgFile;
            $this->description = $description;
            $this->quantity = $quantity;
        }

        public static function insertCate($id, $name, $price, $image, $quantity, $description) {
            $conn = open_database();

            $sql = "insert into product (`id_cate`, `name`, `price`, `image`, `quantity`, `description`, `date_creat`) 
            values (?, ?, ?, ?, ?, ?, curtime())";
            $stm = $conn->prepare($sql);
            $stm->bind_param('isisis', $id, $name, $price, $image, $quantity, $description);

            if(!$stm->execute()){
                echo "Thất bại";
                return array('code' => 1, 'error' => 'Can not execute command');
            }
            else {
                echo "Hhhhhhh";
                return array('code' => 0, 'msg' => 'Successful');
            }
        }

        public static function getAll() {
            $conn= open_database();

            $sql = "select * from product";
            $stm = $conn->prepare($sql);
            if(!$stm->execute()){
                return array('code' => 1, 'error' => 'Can not execute command');
            }

            $result = $stm->get_result();
            $data = array();
            while($row = $result->fetch_assoc()) {
                $data[] = new Product($row['id'], $row['id_cate'], $row['name'], $row['price'], $row['image'], $row['description'], $row['quantity']);
            }

            return array('code' => 0, 'data' => $data);
        }

        public static function getSome($start, $end) {
            $conn= open_database();

            $sql = "select * from product LIMIT ? , ?";
            $stm = $conn->prepare($sql);
            $stm->bind_param('ii', $start, $end);
            if(!$stm->execute()){
                return array('code' => 1, 'error' => 'Can not execute command');
            }

            $result = $stm->get_result();
            $data = array();
            while($row = $result->fetch_assoc()) {
                $data[] = new Product($row['id'], $row['id_cate'], $row['name'], $row['price'], $row['image'], $row['description'], $row['quantity']);
            }

            return array('code' => 0, 'data' => $data);
        }


        public static function get($id) {
            $conn = open_database();
            $sql = "select * from product where id = ?";
            $stm = $conn->prepare($sql);
            $stm->bind_param('i', $id);
          
            if(!$stm->execute()) {
                die("error");
            }

            $res = $stm->fetch();
            return $res;
            
        }

        public static function search($name) {
            $conn = open_database();
            $sql = "select * from product where name = ?";
            $stm = $conn->prepare($sql);
            $stm->bind_param('s', $name);
          
            if(!$stm->execute()) {
                die("error");
            }

            $res = $stm->fetch();
            return $res;
            
        }


        public static function delete($id) {
            $sql = "delete from student where id = :id";
            $conn = open_database();
            $stm = $conn->prepare($sql);

            $stm->execute(array('id'=>$id));

            return $stm->num_rows() == 1;
        }

        public static function update($cate) {
            $sql = "update Cate set name_cate = :name where id_cate= :id";
            $conn = open_database();
            $stm = $conn->prepare($sql);
            $stm->execute(array('id'=> $cate->id, 'name'=> $cate->name));

            return $stm->num_rows() == 1;

        }
    }


?>
