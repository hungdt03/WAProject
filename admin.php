<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                        <div id="category">
                            <h2 class="category-heading">DANH MỤC SẢN PHẨM</h2>

                            <form action="models/Category.php" type="post" class="form-category">
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
                <div class="sidebar-workspace-item">
                    <div class="wrapper-workspace">
                        <div id="category">
                            <h2 class="category-heading">SẢN PHẨM</h2>

                            <form action="./header.php" class="form-category">
                                <div class="form-group">
                                    <label for="name">Tên sản phẩm</label>
                                    <input id="name" type="text" class="">
                                </div>
                                <div class="form-group">
                                    <label for="price">Gía sản phẩm</label>
                                    <input id="price" type="text" class="">
                                </div>
                                <div class="form-group">
                                    <label for="price">Hình ảnh</label>
                                    <input id="price" type="file" class="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả sản phẩm</label>
                                    <input id="name" type="text" class="">
                                </div>
                                <div class="form-group">
                                    <label for="price">Số lượng</label>
                                    <input id="price" type="number" class="">
                                </div>

                                <button class="btn-add">THÊM</button>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="sidebar-workspace-item">
                    <div class="wrapper-workspace">
                        <div id="category">
                            <h2 class="category-heading">THỐNG KÊ</h2>

                            <form action="" class="form-category">
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