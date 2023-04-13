<?php
    require_once('./config/config.php');
    require_once('./models/Category.php');

    class Category {
        public $id;
        public $name;

        function __construct($id, $name) {
            $this->id = $id;
            $this->name = $name;
        }

        public static function insertCate($name, $idtype) {
            $conn = open_database();

            $sql = "insert into cate (`name_cate`, `id_type`, `date_creat`) values (?, ?, curtime())";
            $stm = $conn->prepare($sql);
            $stm->bind_param('ss', $name, $idtype);

            if(!$stm->execute()){
                echo "Hãiii";
                return array('code' => 1, 'error' => 'Can not execute command');
            }
            else {
                echo "Hhhhhhh";
                return array('code' => 0, 'msg' => 'Successful');
            }
        }

        public static function getAll() {
            $conn= open_database();

            $sql = "select * from cate";
            $stm = $conn->prepare($sql);
            if(!$stm->execute()){
                return array('code' => 1, 'error' => 'Can not execute command');
            }

            $result = $stm->get_result();
            $data = array();
            while($row = $result->fetch_assoc()) {
                $data[] = new Category($row['id_cate'], $row['name_cate']);
            }

            return array('code' => 0, 'data' => $data);
        }


        public static function get($_id) {
            $conn = open_database();
            $sql = "select * from cate where id_cate = ?";
            $stm = $conn->prepare($sql);
            $stm->bind_param('s', $_id);
          
            if(!$stm->execute()) {
                die("error");
            }

            $res = $stm->get_result();
            if($res->num_rows > 0){
                $data = $res->fetch_assoc();

                return new Category($data['id_cate'], $data['name_cate']);
            }
            
            return null;
        }


        public static function delete($id) {
            $sql = "delete from student where id = :id";
            $conn = open_database();
            $stm = $conn->prepare($sql);

            $stm->execute(array('id'=>$id));

            return $stm->num_rows() == 1;
        }

        public static function update($cate) {
            $sql = "update Cate set name_cate = ? where id_cate= ?";
            $conn = open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param('si', $cate->name, $cate->id);
            
            if(!$stm->execute()) {
                return false;
            }

            return true;

        }
    }


?>
