<?php
require_once('./models/Category.php');
require_once('./models/Product.php');

if(isset($_GET['type'])) {
    if(!empty($_GET['type'])) {
        $type = $_GET['type'];
        $currentCate = Category::get($type);
    } else {
        $currentCate = Category::get(0);
    }
} else {
    $currentCate = Category::get(0);
}

$title = 'Danh sách sản phẩm';
$mycss1 = './assets/css/listProduct.css';
$mycss2 = './assets/css/product.css';
require_once('header.php');
?>

        <div id="content">
            <div class="container">
                <div class="col-pd-6">
                    <div class="breadcrumb__wrapper hide-on-mobile">
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-item"><a href="/" class="breadcrumb__list-item-link">Trang chủ</a></li> >
                            <li class="breadcrumb__list-item"><a href="#" class="breadcrumb__list-item-link">Sản phẩm</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 hide-on-tablet-mobile">
                        <div class="col-pd-6">
                            <div class="filter__wrapper">
                                <div class="filter__item">
                                    <button class="filter__heading" data-toggle="collapse" data-target="#filter1">HÃNG SẢN XUẤT</button>
                                    <div id="filter1" class="collapse">
                                        <ul class="filter__item-list">
                                            <li class="filter__item-list-li">
                                                <input type="checkbox" name="" id="">
                                                <a href="">Điện thoại</a>
                                            </li>
                                            <li class="filter__item-list-li">
                                                <input type="checkbox" name="" id="">
                                                <a href="">Laptop</a>
                                            </li>
                                            <li class="filter__item-list-li">
                                                <input type="checkbox" name="" id="">
                                                <a href="">Đồng hồ</a>
                                            </li>
                                            <li class="filter__item-list-li">
                                                <input type="checkbox" name="" id="">
                                                <a href="">Ipad</a>
                                            </li>
                                            <li class="filter__item-list-li">
                                                <input type="checkbox" name="" id="">
                                                <a href="">PC</a>
                                            </li>
                                            <li class="filter__item-list-li">
                                                <input type="checkbox" name="" id="">
                                                <a href="">Smart TV</a>
                                            </li>
                                            <li class="filter__item-list-li">
                                                <input type="checkbox" name="" id="">
                                                <a href="">Tablet</a>
                                            </li>
                                            <li class="filter__item-list-li">
                                                <input type="checkbox" name="" id="">
                                                <a href="">Âm thanh</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
        
                    <div class="col col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="col-pd-6">
                            <div class="all__product-heading">
                                <?php

                                    if($currentCate != null) {
                                ?>
                                <h3 class="all__product-heading-title"><?= $currentCate->name ?></h3>
                            </div>
    
                            <div class="all__product-heading-wrapper">
                                <div class="all__product-view">
                                    <span class="all__product-view-title">Ưu tiên xem: </span>
                                    <ul class="all__product-view-list">
                                        <li class="all__product-view-list-item active">Bán chạy nhất</li>
                                        <li class="all__product-view-list-item">Trả góp 0%</li>
                                        <li class="all__product-view-list-item">Gía thấp</li>
                                        <li class="all__product-view-list-item">Gía cao</li>
                                    </ul>
                                </div>
    
                                <div class="all__product-sort hide-on-mobile">
                                    <select name="" id="">
                                        <option value="">Bán chạy nhất</option>
                                        <option value="">Trả góp 0%</option>
                                        <option value="">Gía thấp</option>
                                        <option value="">Gía cao</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="allproduct__wrapper container">
                            <div class="row">
                                <?php
                                $lstProducts = Product::getSome(0, 11)['data'];
                                    foreach($lstProducts as $prod) {

                                        if($prod->idCate == $currentCate->id) {
                                ?>
                                <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 product__container-item">
                                    <div class="product__container-item-wrapper">
                                        <div class="product__container-item-inner">
                                            <a href="./detailProduct.php?id=<?= $prod->id ?>" class="product__container-item-link">
                                                <div class="product-image">
                                                    <img src="./assets/images/<?= $prod->imgFile ?>" alt="">
                                                </div>
                                                <div class="product-info">
                                                    <a href="./detailProduct.php?id=<?= $prod->id ?>" class="info-link"><?= $prod->name ?></a>
                                                    <span class="info-price">
                                                        <strong><?= $prod->price ?></strong>
                                                        <strike>799,000 ₫</strike>
                                                    </span>

                                                </div>
                                            </a>
                                            <a href="./detailProduct.php?id=<?php echo $prod->id;?>" class="add-product">MUA NGAY</a>
                                        </div>
                                    </div>
                                </div>
                                <?php  
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="load-more-products">
                            <a href="" class="btn-load-more-products">
                                XEM THÊM SẢN PHẨM
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
require_once('footer.php');
?>