<?php
    // Lay ra san pham hot
function getProHot(){
    $conn = open_database();
    $sql = 'select * from product';
    $query = mysqli_query($conn,$sql);
    $result = array();

    while($row = mysqli_fetch_assoc($query)){
        $result[] = $row;
    }
    return $result;
}

function getDetailPro($id){
    $conn = open_database();
    $row = $conn->query("SELECT * FROM `product` WHERE `id` = '$id' ")->fetch_array();
    return $row;
}


?>