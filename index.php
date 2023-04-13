<?php
include_once './config/config.php';
include_once './config/function.php';
require_once './models/Product.php';



$title = 'BCHmobile';
$mycss1 = './assets/css/product.css';
$mycss2 = '';

require_once('header.php');



?>
    <!-- ===============BODY WEBSITE================= -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-pd-6">
                                <div class="col col-lg-12">
                                    <div id="demo" class="carousel slide slide-show" data-ride="carousel">

                                        <!-- Indicators -->
                                        <ul class="carousel-indicators">
                                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                                            <li data-target="#demo" data-slide-to="1"></li>
                                            <li data-target="#demo" data-slide-to="2"></li>
                                            <li data-target="#demo" data-slide-to="3"></li>
                                            <li data-target="#demo" data-slide-to="4"></li>
                                        </ul>

                                        <!-- The slideshow -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="image-slider" src="./assets/images/slider1.jpg"
                                                     alt="Los Angeles">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="image-slider" src="./assets/images/slider2.jpg"
                                                     alt="Chicago">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="image-slider" src="./assets/images/slider3.png"
                                                     alt="New York">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="image-slider" src="./assets/images/slider4.jpg"
                                                     alt="New York">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="image-slider" src="./assets/images/slider5.jpg"
                                                     alt="New York">
                                            </div>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                            <i class="fa-solid fa-chevron-left"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            $lstCates = Category::getAll()['data'];
                           
                            foreach($lstCates as $cate) {
                                
                        ?>

                        <section class="product__container section-margin-top">
                            <div class="row">
                                <div class="col-pd-6">
                                    <div class="product__container-heading col-xl-12">
                                        <div class="product__container-heading-bar">
                                            <div class="product__container-heading-bar-left"></div>
                                            <div class="product__container-heading-bar-right">
                                                <a href="./listProduct.php?type=<?= $cate->id ?>"> <h3><?= $cate->name ?></h3></a>
                                            </div>
                                        </div>
                                        <div class="product__container-heading-viewall hide-on-mobile">
                                            <a href="./listProduct.php?type=<?= $cate->id ?>" class="link-viewall">
                                                <span>Xem thêm</span>
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                <?php
                                    $lstProducts = Product::getSome(0, 9)['data'];
                                    foreach ($lstProducts as $product){
                                        
                                        if($cate->id === $product->idCate) {
                                            $pro = $product;
                                        
                                        ?>
                                        <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product__container-item">
                                            <div class="product__container-item-wrapper" >
                                                <div class="product__container-item-inner">
                                                    <div class="product-image">
                                                        <a href="./detailProduct.php?id=<?php echo $pro->id;?>" class="product-image-link">
                                                            <img src="./assets/images/<?php echo $pro->imgFile;?>" alt="kkkk">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="./detailProduct.php?id=<?php echo $pro->id;?>" class="info-link">
                                                            <h3><?php echo $pro->name;?></h3>
                                                        </a>
                                                        <span class="info-price">
                                                            <strong><?php echo number_format($pro->price);?> ₫</strong>
                                                        </span>
                                                    </div>
                                                    <a href="./detailProduct.php?id=<?php echo $pro->id;?>" class="add-product">MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }

                                        
                                        
                                    } 
                                    ?>
                                </div>
                            </div>
                        </section>


                        <?php
                            }
                        ?>
                     
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="brands">


            <ul class="brands-list">
                <li>
                    <a class="" href="" title="Apple">
                        <img
                                src="https://cdn.hoanghamobile.com/i/cat/Uploads/2022/09/07/logoooooooooooooooo.png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="Samsung">
                        <img
                                src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/11/30/samsung-logo-transparent.png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="Xiaomi">
                        <img
                                src="https://cdn.hoanghamobile.com/i/cat/Uploads/2021/05/27/xiaomi-global-logo-rgb-logo-moi.png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="OPPO">
                        <img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/09/14/brand (3).png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="Nokia">
                        <img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/09/14/brand (4).png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="realme">
                        <img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/09/14/brand (6).png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="Vivo">
                        <img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/11/30/vivo-logo.png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="XOR">
                        <img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2021/12/24/xorr.png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="Masstel">
                        <img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/10/30/logo-masstel-4.png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="TCL">
                        <img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2022/10/06/tclll.png">
                    </a>
                </li>

                <li>
                    <a class="" href="" title="Philips">
                        <img src="https://cdn.hoanghamobile.com/i/cat/Uploads/2020/11/07/logo-philips.png">
                    </a>
                </li>


            </ul>

        </div>

    </div>

    <div class="subscript-wrapper">
        <div class="container">
            <div class="subscript-info row">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                    <div class="row align-items-center justify-content-between">
                        <div class="subscript-img col-xl-3 col-md-3 col-sm-3">
                            <img src="https://hoanghamobile.com/Content/web/img/sub-logo.png">

                        </div>
                        <div class="subscript-text col-xl-9 col-md-9 col-sm-9">
                            <h4>Đăng ký nhận tin</h4>
                            <p>Đăng ký để nhận những chương trình khuyến mại hot nhất của Hoàng Hà Mobile</p>
                        </div>
                    </div>
                </div>
                <div class="subscript-form col-xl-4 col-md-4 col-sm-12 col-12">
                    <form>
                        <div class="input">
                            <input type="email" id="email" name="email" placeholder="Nhập E-mail của bạn">
                        </div>
                        <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    </div>

<?php
require_once('footer.php');
?>