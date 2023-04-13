<?php

    require_once("./config/config.php");


    if(isset($_GET['search'])) {
        if(!empty($_GET['search'])) {
            $name = $_GET['search'];
        }
    }


    $sql = 'SELECT * FROM product where name = ?';
    $conn = open_database();

    try{
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $name);
        $stmt->execute();
    }
    catch(PDOException $ex){
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }

    $result = $stmt->get_result();
    $data = array();
    while ($row = $result->fetch_assoc())

    {
        $data[] = $row;
    }

    echo json_encode(array('status' => true, 'data' => $data));

?>