<?php
include_once './config/config.php';
include_once './config/function.php';
$detail = getDetailPro($_GET['id']);
$title = isset($detail)?$detail['name']:'Không tìm thấy trang';
$mycss1 = './assets/css/product.css';
$mycss2 = './assets/css/detailProduct.css';
require_once('header.php');
?>

        <!-- ===============BODY WEBSITE================= -->
        <div id="content">
            <div class="container">
                <div class="col-pd-6 hide-on-mobile">
                    <div class="breadcrumb__wrapper">
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-item"><a href="index.php" class="breadcrumb__list-item-link">Trang chủ</a>
                            </li> >
                            <li class="breadcrumb__list-item"><a href="index.php class="breadcrumb__list-item-link">Sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <h5 class="detailproduct__name-product hide-on-pc hide-on-tablet"><?php echo $detail['name'];?></h5>
                        <div class="detailproduct__img">
                            <div class="detailproduct__img-main">
                                <img src="./assets/images/<?php echo $detail['image'];?>" alt="<?php echo $detail['image'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="detailproduct__info">
                            <h2 class="detailproduct__name-product hide-on-mobile"><?php echo $detail['name'];?></h2>
                            <div class="detailproduct__price-product">
                                <p class="current-price"><?php echo number_format($detail['price']);?> ₫</p>
                            </div>

                            <form action="cart.php" method="POST">
                                <div class="section">
                                    <div class="detailproduct__quantity-product">
                                        <h4 class="detailproduct__quanitiy-heading">Số lượng</h4>
                                        <div class="buttons_added">
                                            <input type="hidden" name="product_id" value="<?=$detail['id']?>">
                                            <input class="quantity" max="<?=$detail['quantity']?>" min="1" name="quantity" type="number" value="1" placeholder="Quantity" required>
                                        </div>
                                    </div>
                                    <div class="detailproduct__buttons">
                                        <button type="submit" class="btn-add-cart btn btn-danger">
                                            THÊM VÀO GIỎ HÀNG
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row detailinfo__wrapper">
                    <div class="detailinfo__product col col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div id="accordion">

                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link detailinfo__product-heading" data-toggle="collapse" href="#collapseOne">
                                        MÔ TẢ SẢN PHẨM
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body"><?=$detail['description']?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<?php
require_once('footer.php');
?>