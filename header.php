<?php
require_once ('./models/Category.php');

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="<?= $mycss1; ?>">
    <link rel="stylesheet" href="<?= $mycss2; ?>">
    <!--    <link href="style.css" rel="stylesheet" type="text/css">-->
    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">-->
    <link rel="shortcut icon" type="image/png" href="./assets/images/favicon.png" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="./assets/js/app.js" defer></script>

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
                <a href=<?= isset($_SESSION['name']) ? '' : "./login.php" ?>><?= isset($_SESSION['name']) ? $_SESSION['name'] : 'Tài khoản' ?></a>
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
                        <li><a href=<?= isset($_SESSION['name']) ? '' : "./login.php" ?>><?= isset($_SESSION['name']) ? $_SESSION['name'] : 'Đăng nhập' ?></a></li>
                        <li><a href=<?= !isset($_SESSION['name']) ? './register.php' : "./logout.php" ?>><?= isset($_SESSION['name']) ? 'Đăng xuất' : 'Đăng ký' ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="header__center">
                <div class="container">
                    <div class="col-pd-6">
                        <div class="header__center-inner">

                            <div class="header__center-logo">
                                <a href="index.php" class="header__center-log-link">
                                    <img src="./assets/images/logo.png" alt="CÔNG TY CỔ PHẦN XÂY DỰNG VÀ ĐẦU TƯ THƯƠNG MẠI BIÊN CƯƠNG HƯNG" class="header__center-logo-img">
                                </a>
                            </div>

                            <div class="header__center-search">
                                <div class="header__center-search-wrapper">
                                    <input type="text" class="header__center-search-input" placeholder="Hôm nay bạn cần tìm gì?">
                                    <button class="header__center-search-btn">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>

                                    <div class="header__search-history">
                                        <p class="header__search-history-heading">Kết quả tìm thấy</p>
                                        <ul class="header__search-history-list">
                                            
                                        </ul>
                                    </div>
                                </div>


                            </div>

                            <div class="header__center-order">
                                <?php
                                    if(isset($_SESSION['name']) && $_SESSION['name'] == "admin")
                                    echo '
                                        <div class="header__center-check-order hide-on-tablet-mobile">
                                            <a class="header__center-check-order-link" href="./admin.php">
                                                <span class="text">Trang Admin</span>
                                            </a>
                                        </div>
                                    ';
                                ?>
                                

                                <div class="header__center-cart hide-on-tablet-mobile">
                                    <a href="cart.php" class="header__center-cart-link">
                                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                    </a>
                                    <span class="cart-quantity"><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></span>
                                </div>
                            </div>

                            <div class="header__menu-bar hide hide-on-pc">
                                <button>
                                    <i class="fa-solid fa-bars"></i>
                                </button>
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
                                <ul class="category__item-list text-white">
                                    <?php
                                    $listCates = Category::getAll()['data'];
                                    // print_r($listCates[0]);
                                    foreach ($listCates as $cate) {
                                    ?>
                                        <li class="category__item-list-li"><a href="listProduct.php?type=<?= $cate->id ?>"><?= $cate->name ?></a></li>

                                    <?php
                                    }
                                    ?>

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
                        <?php
                        $listCates = Category::getAll()['data'];
                        // print_r($listCates[0]);
                        foreach ($listCates as $cate) {
                        ?>
                            <li class="category__item-list-li"><a href="./listProduct.php?id=<?= $cate->id ?>"><?= $cate->name ?></a></li>

                        <?php
                        }
                        ?>
                    </ul>


                </div>

                <button class="btn-close">
                    <i class="fa-solid fa-circle-xmark"></i>
                </button>
            </div>

        </header>

        