<?php

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $row = getDetailPro($id); // get the product customer want to buy

        if(!isset($_SESSION['carts']) || empty($_SESSION['carts'])){
            $_SESSION['carts'][$id] = $row;
            $_SESSION['carts'][$id]['qty'] = 1;
        }
        else{
            if(array_key_exists($id, $_SESSION['carts'])){
                # code...
                $_SESSION['carts'][$id]['qty'] += 1;
            }else{
                $_SESSION['carts'][$id] = $row;
                $_SESSION['carts'][$id]['qty'] = 1;
            }
        }

        echo "<pre>";
        print_r($_SESSION['carts']);
        echo "</pre>";
    }else{
        header('Location: index.php');
    }