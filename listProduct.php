<?php
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
                            <li class="breadcrumb__list-item"><a href="" class="breadcrumb__list-item-link">Trang chủ</a></li> >
                            <li class="breadcrumb__list-item"><a href="" class="breadcrumb__list-item-link">Sản phẩm</a></li>
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
                                <h3 class="all__product-heading-title">ĐIỆN THOẠI APPLE</h3>
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
                                <div class="col col-xl-15 col-lg-3 col-md-3 col-sm-4 col-6 product__container-item">
                                    <div class="product__container-item-wrapper">
                                        <a href="./productDetail.html" class="product__container-item-link">
                                            <div class="product-image">
                                                <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="info-link">Camera IP Wifi TP-Link Tapo C200
                                                    360° 1080P - Chính hãng</a>
                                                <span class="info-price">
                                                    <strong>510,000 ₫</strong>
                                                    <strike>799,000 ₫</strike>
                                                </span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-xl-15 col-lg-3 col-md-3 col-sm-4 col-6 product__container-item">
                                    <div class="product__container-item-wrapper">
                                        <a href="#" class="product__container-item-link">
                                            <div class="product-image">
                                                <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="info-link">Camera IP Wifi TP-Link Tapo C200
                                                    360° 1080P - Chính hãng</a>
                                                <span class="info-price">
                                                    <strong>510,000 ₫</strong>
                                                    <strike>799,000 ₫</strike>
                                                </span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-xl-15 col-lg-3 col-md-3 col-sm-4 col-6 product__container-item">
                                    <div class="product__container-item-wrapper">
                                        <a href="#" class="product__container-item-link">
                                            <div class="product-image">
                                                <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="info-link">Camera IP Wifi TP-Link Tapo C200
                                                    360° 1080P - Chính hãng</a>
                                                <span class="info-price">
                                                    <strong>510,000 ₫</strong>
                                                    <strike>799,000 ₫</strike>
                                                </span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-xl-15 col-lg-3 col-md-3 col-sm-4 col-6 product__container-item">
                                    <div class="product__container-item-wrapper">
                                        <a href="#" class="product__container-item-link">
                                            <div class="product-image">
                                                <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="info-link">Camera IP Wifi TP-Link Tapo C200
                                                    360° 1080P - Chính hãng</a>
                                                <span class="info-price">
                                                    <strong>510,000 ₫</strong>
                                                    <strike>799,000 ₫</strike>
                                                </span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-xl-15 col-lg-3 col-md-3 col-sm-4 col-6 product__container-item">
                                    <div class="product__container-item-wrapper">
                                        <a href="#" class="product__container-item-link">
                                            <div class="product-image">
                                                <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="info-link">Camera IP Wifi TP-Link Tapo C200
                                                    360° 1080P - Chính hãng</a>
                                                <span class="info-price">
                                                    <strong>510,000 ₫</strong>
                                                    <strike>799,000 ₫</strike>
                                                </span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-xl-15 col-lg-3 col-md-3 col-sm-4 col-6 product__container-item">
                                    <div class="product__container-item-wrapper">
                                        <a href="#" class="product__container-item-link">
                                            <div class="product-image">
                                                <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="info-link">Camera IP Wifi TP-Link Tapo C200
                                                    360° 1080P - Chính hãng</a>
                                                <span class="info-price">
                                                    <strong>510,000 ₫</strong>
                                                    <strike>799,000 ₫</strike>
                                                </span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
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