<?php
$title = 'Giỏ hàng';
$mycss1 = './assets/css/cart.css';
$mycss2 = '';
require_once('header.php');
?>

        
        <div id="content">
            <div class="container">
                <div class="breadcrumb__wrapper hide-on-mobile">
                    <ul class="breadcrumb__list">
                        <li class="breadcrumb__list-item"><a href="" class="breadcrumb__list-item-link">Trang chủ</a>
                        </li> >
                        <li class="breadcrumb__list-item"><a href="" class="breadcrumb__list-item-link">Sản phẩm</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="cart__wrapper">
                            <div class="current-products">
                                <div class="checkbox-products">
                                    <input class="checkbox" type="checkbox" name="" id="">
                                    <span>Chọn tất cả</span>
                                </div>

                                <div class="delete-products">
                                    <button class="btn-delete">Xóa</button>
                                </div>
                            </div>

                            <div class="cart__product-list">
                                <div class="cart__product-item">
                                    <div class="cart__product-item-wrapper">
                                        <div class="cart__product-item-img">
                                            <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                        </div>

                                        <div class="cart__product-item-info">
                                            <p class="info-name">Điện thoại Apple</p>
                                            <p class="info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                            <p class="info-price">15.000.000</p>
                                        </div>
                                    </div>

                                    <div class="cart__product-item-other">
                                        <div class="cart__product-item-quanity">6</div>
                                        <div class="cart__product-item-delete">
                                            <button>Xóa</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="cart__product-item">
                                    <div class="cart__product-item-wrapper">
                                        <div class="cart__product-item-img">
                                            <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                        </div>

                                        <div class="cart__product-item-info">
                                            <p class="info-name">Điện thoại Apple</p>
                                            <p class="info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                            <p class="info-price">15.000.000</p>
                                        </div>
                                    </div>

                                    <div class="cart__product-item-other">
                                        <div class="cart__product-item-quanity">6</div>
                                        <div class="cart__product-item-delete">
                                            <button>Xóa</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="cart__product-item">
                                <div class="cart__product-item-wrapper">
                                    <div class="cart__product-item-img">
                                        <img src="./assets/images/image-removebg-preview-5.webp" alt="">
                                    </div>

                                    <div class="cart__product-item-info">
                                        <p class="info-name">Điện thoại Apple</p>
                                        <p class="info-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                        <p class="info-price">15.000.000</p>
                                    </div>
                                </div>

                                <div class="cart__product-item-other">
                                    <div class="cart__product-item-quanity">6</div>
                                    <div class="cart__product-item-delete">
                                        <button>Xóa</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="orderinfo__wrapper">
                            <h4 class="orderinfo__heading">THÔNG TIN ĐẶT HÀNG</h4>

                            <form action="" class="form-orderinfo">
                                <div class="form-group">
                                    <label for="name">Họ tên</label>
                                    <input type="text" id="name" placeholder="Họ tên">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" id="phone" placeholder="Số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" id="address" placeholder="Địa chỉ">
                                </div>

                                <button class="btn-order">XÁC NHẬN ĐƠN HÀNG</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
require_once('footer.php');
?>