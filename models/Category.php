<?php
    require_once 'config/config.php';

    class Category {
        public $id;
        public $name;

        function __construct($id, $name) {
            $this->$id = $id;
            $this->$name = $name;
        }

        static function insertCate($name) {
            $conn = open_database();

            $sql = "insert into Cate (`name_cate`) values (?, getdate())";
            $stm = $conn->prepare($sql);
            $stm->bind_param('s',$name);

            if(!$stm->execute()){
                return array('code' => 1, 'error' => 'Can not execute command');
            }
            else {
                return array('code' => 0, 'msg' => 'Successful');
            }
        }

        static function getCategories() {
            $conn= open_database();

            $sql = "select * from cate";
            $stm = $conn->prepare($sql);
            if(!$stm->execute()){
                return array('code' => 1, 'error' => 'Can not execute command');
            }

            $result = $stm->get_result();

            return array('code' => 0, 'data' => $result);
        }
    }

    if(isset($_POST['name'])) {
        if(!empty($_POST['name'])) {
            Category::insertCate($_POST['name']);
        }
    }
?>
