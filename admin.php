<?php
require_once('models/Category.php');
require_once('models/Product.php');

// echo $_GET['cate-name'];
if (isset($_GET['cate-name']) && isset($_GET['code-cate'])) {
    if (!empty($_GET['cate-name']) && !empty($_GET['code-cate'])) {
        $name = $_GET['cate-name'];
        $code = $_GET['code-cate'];

        Category::insertCate($name, $code);
        header("Location: index.php");
    }
}




// ===========PRODUCT===========
if (
    isset($_POST['select-cate'])
    && isset($_POST['name-product'])
    && isset($_POST['price-product'])
    && isset($_FILES['img-product'])
    && isset($_POST['desc-product'])
    && isset($_POST['quantity-product'])
) {
    
    
    if (
        !empty($_POST['select-cate'])
        && !empty($_POST['name-product'])
        && !empty($_POST['price-product'])
        && !empty($_FILES['img-product'])
        && !empty($_POST['desc-product'])
        && !empty($_POST['quantity-product'])

    ) {
        
        $proCate = $_POST['select-cate'];
        $proName = $_POST['name-product'];
        $proPrice = $_POST['price-product'];
        $proImg = $_FILES['img-product']["name"];
        $proDesc = $_POST['desc-product'];
        $proQuantity = $_POST['quantity-product'];

        $target_dir = "assets/images/";
        $target_file = $target_dir . basename($_FILES["img-product"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        echo $target_file;

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["img-product"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

 
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";

        } else {
            if (move_uploaded_file($_FILES["img-product"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["img-product"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        Product::insertCate($proCate, $proName, $proPrice, $proImg, $proQuantity, $proDesc);
        header("Location: index.php");
    } 
} 

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="wrapper-name">
            <h1>PAGE ADMIN</h1>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            <div class="sidebar">
                <ul class="sidebar-list">
                    <li class="sidebar-item acitveItem">Danh mục</li>
                    <li class="sidebar-item">Sản Phẩm</li>
                    <li class="sidebar-item">Thống kê</li>
                </ul>
            </div>

            <div class="sidebar-workspace">
                <div class="sidebar-workspace-item showItem">
                    <div class="wrapper-workspace">
                        <div class="shadow"></div>

                        <form action="admin.php" type="" class="form-category">
                                <div class="form-group">
                                    <label for="code-cate">Mã danh mục</label>
                                    <input id="code-cate" name="code-cate" type="text" class="input-code-cate">
                                </div>
                                <div class="form-group">
                                    <label for="name-cate">Tên danh mục</label>
                                    <input id="name-cate" name="cate-name" type="text" class="input-name-cate">
                                </div>
                                <button type="submit" class="btn-add">THÊM</button>

                                <button class="btn-close-form">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </form>
                        <div class="text-center mt-5">
                            <button class="btn-add-cate">THÊM DANH MỤC</button>
                        </div>
                        <table border="1" id="category-list">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    
                                    <th>
                                        Thao tác
                                    </th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $lstCates = Category::getAll()['data'];

                                    foreach($lstCates as $cate) {
                                ?>
                                    <tr>
                                        <td><?= $cate->id ?></td>
                                        <td><?= $cate->name ?></td>
                                        <td>
                                            <a href="" id="btn-remove-cate">Xóa</a>
                                            <a href="" id="btn-update-cate">Sửa</a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                                           
                    </div>
                </div>
                <div class="sidebar-workspace-item">
                    <div class="wrapper-workspace">
                        <div id="product">
                            <h2 class="category-heading">SẢN PHẨM</h2>

                            <form action="admin.php" method="post" class="form-product" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="select-cate">Chọn loại</label>
                                    <select name="select-cate" id="">
                                        <?php
                                        $lstCates = Category::getAll()['data'];
                                        foreach ($lstCates as $cate) {
                                        ?>
                                            <option value="<?= $cate->id ?>"><?= $cate->name ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Tên sản phẩm</label>
                                    <input id="name" name="name-product" type="text" class="">
                                </div>
                                <div class="form-group">
                                    <label for="price">Gía sản phẩm</label>
                                    <input id="price" name="price-product" type="text" class="">
                                </div>
                                <div class="form-group">
                                    <label for="img">Hình ảnh</label>
                                    <input id="img" name="img-product" type="file" class="">
                                </div>
                                <div class="form-group">
                                    <label for="desc">Mô tả sản phẩm</label>
                                    <input id="desc" name="desc-product" type="text" class="">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Số lượng</label>
                                    <input id="quantity" name="quantity-product" type="number" class="">
                                </div>

                                <button class="btn-add">THÊM</button>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="sidebar-workspace-item">
                    <div class="wrapper-workspace">
                        <div id="report">
                            <h2 class="category-heading">THỐNG KÊ</h2>

                            <form action="" class="form-report">
                                <div class="form-group">
                                    <label for="name">Tên danh mục</label>
                                    <input id="name" type="text" class="input-name-cate">
                                </div>
                                <div class="form-group">
                                    <label for="stt">STT</label>
                                    <input id="stt" type="text" class="input-name-stt">
                                </div>
                                <button class="btn-add">THÊM</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="./assets/js/admin.js"></script>

</html>