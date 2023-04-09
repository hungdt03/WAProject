<?php
    class StudentController{

        public function index(){

            require_once('models/Student.php');

            $students = Student::getAll();
            $data = array('students' => $students);

            ob_start();
            $message = "URL Not Found";
            require_once('views/student/index.php');
            $content = ob_end_clean();

            require_once('views/layout/template.php');
        }      
        public function view(){
            echo 'View page of Student';
        }
        public function edit(){
            echo 'Edit page of Student';
        }
        public function save(){
            echo 'Save page of Student';
        }
        public function delete(){
            echo 'Delete page of Student';
        }
        
    }
?>