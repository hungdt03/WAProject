<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title><?=$title;?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="stylesheet" href="<?=$mycss1;?>">
    <link rel="stylesheet" href="<?=$mycss2;?>">


    <link rel="shortcut icon" type="image/png" href="./assets/images/favicon.png"/>
<!--    <title>--><?php //=$title;?><!--</title>-->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div id="app">
    <!-- ===============HEADER================= -->
        <div class="fixed-mobile-menu hide-on-tablet hide-on-pc">
            <div class="fixed-mobile-item">
                <a href="">Trang chủ</a>
            </div>
            <div class="fixed-mobile-item">
                <a href="">Giỏ hàng</a>
            </div>
            <div class="fixed-mobile-item">
                <a href="">Giới thiệu</a>
            </div>
            <div class="fixed-mobile-item">
                <a href="">Tài khoản</a>
            </div>
        </div>

    <div class="fixed-tablet">
        <div class="fixed-cart">
            <a href="#" class="fixed-cart-link">
                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                <span class="fixed-cart-quantity">0</span>
            </a>


        </div>
    </div>

    <header>
        <div class="header__top hide-on-tablet-mobile">
            <div class="container">
                <ul class="header__top-navigation">
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Sản phẩm đã xem</a></li>
                    <li><a href="#">Tra cứu đơn hàng</a></li>
                    <li><a href="./register.html">Đăng kí</a></li>
                    <li><a href="./login.html">Đăng nhập</a></li>
                </ul>
            </div>
        </div>

        <div class="header__center">
            <div class="container">
                <div class="col-pd-6">
                    <div class="header__center-inner">
                        <div class="header__menu-bar hide hide-on-pc">
                            <button>
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>

                        <div class="header__center-search hide-on-pc">
                            <div class="header__center-search-wrapper">
                                <input type="text" class="header__center-search-input"
                                       placeholder="Hôm nay bạn cần tìm gì?">
                                <button class="header__center-search-btn">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>

                                <div class="header__search-history">
                                    <p class="header__search-history-heading">Lịch sử tìm kiếm</p>
                                    <ul class="header__search-history-list">
                                        <li class="header__search-history-list-item">
                                            <a href="" class="header__search-history-list-item-link">Search 1</a>
                                        </li>
                                        <li class="header__search-history-list-item">
                                            <a href="" class="header__search-history-list-item-link">Search 2</a>
                                        </li>
                                        <li class="header__search-history-list-item">
                                            <a href="" class="header__search-history-list-item-link">Search 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="header__center-logo">
                            <a href="index.php" class="header__center-log-link">
                                <img src="./assets/images/logo.png" alt="CÔNG TY CỔ PHẦN XÂY DỰNG VÀ ĐẦU TƯ THƯƠNG MẠI BIÊN CƯƠNG HƯNG" class="header__center-logo-img" >
                            </a>
                        </div>

                        <div class="header__center-search hide-on-tablet-mobile">
                            <div class="header__center-search-wrapper">
                                <input type="text" class="header__center-search-input"
                                       placeholder="Hôm nay bạn cần tìm gì?">
                                <button class="header__center-search-btn">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>

                                <div class="header__search-history">
                                    <p class="header__search-history-heading">Lịch sử tìm kiếm</p>
                                    <ul class="header__search-history-list">
                                        <li class="header__search-history-list-item">
                                            <a href="" class="header__search-history-list-item-link">Search 1</a>
                                        </li>
                                        <li class="header__search-history-list-item">
                                            <a href="" class="header__search-history-list-item-link">Search 2</a>
                                        </li>
                                        <li class="header__search-history-list-item">
                                            <a href="" class="header__search-history-list-item-link">Search 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="header__center-order">
                            <div class="header__center-check-order hide-on-tablet-mobile">
                                <a class="header__center-check-order-link" href="#">
                                        <span class="icon">
                                            <i class="fa-solid fa-truck-fast"></i>
                                        </span>
                                    <span class="text">Kiểm tra đơn hàng</span>
                                </a>
                            </div>

                            <div class="header__center-cart hide-on-tablet-mobile">
                                <a href="#" class="header__center-cart-link">
                                    <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                </a>

                                <span class="cart-quantity">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__bottom hide-on-tablet-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-pd-6">
                        <div class="header__category">
                            <ul class="category__item-list">
                                <li class="category__item-list-li"><a href="./listProduct.php">Điện thoại</a></li>
                                <li class="category__item-list-li"><a href="./listProduct.php">Laptop</a></li>
                                <li class="category__item-list-li"><a href="./listProduct.php">Đồng hồ</a></li>
                                <li class="category__item-list-li"><a href="./listProduct.php">Ipad</a></li>
                                <li class="category__item-list-li"><a href="./listProduct.php">PC</a></li>
                                <li class="category__item-list-li"><a href="./listProduct.php">Smart TV</a></li>
                                <li class="category__item-list-li"><a href="./listProduct.php">Tablet</a></li>
                                <li class="category__item-list-li"><a href="./listProduct.php">Âm thanh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-mobile-table hide-on-pc">
            <div class="header__category">
                <h4>Danh mục sản phẩm</h4>
                <ul class="category__item-list">
                    <li class="category__item-list-li"><a href="./listProduct.php">Điện thoại</a></li>
                    <li class="category__item-list-li"><a href="./listProduct.php">Laptop</a></li>
                    <li class="category__item-list-li"><a href="./listProduct.php">Đồng hồ</a></li>
                    <li class="category__item-list-li"><a href="./listProduct.php">Ipad</a></li>
                    <li class="category__item-list-li"><a href="./listProduct.php">PC</a></li>
                    <li class="category__item-list-li"><a href="./listProduct.php">Smart TV</a></li>
                    <li class="category__item-list-li"><a href="./listProduct.php">Tablet</a></li>
                    <li class="category__item-list-li"><a href="./listProduct.php">Âm thanh</a></li>
                </ul>


            </div>

            <button class="btn-close">
                <i class="fa-solid fa-circle-xmark"></i>
            </button>
        </div>

    </header>