<?php
$title = 'Đăng nhập';
$mycss1 = './assets/css/login.css';
$mycss2 = '';
require_once('header.php');
?>

        <div class="content" style="display: block; margin-top: 120px" >
            <div class="container-fluid heading">
                <div style="border-radius: 4px;" class="container content__bg">
                    <div class="form-login">
                        <div class="temp"></div>
                        <form action="" class="form">
                            <div class="form-login-info">
                                <div class="form-login-tittle">
                                    <div class="form-login-tittle-info">
                                        <div class="tittle-form">Đăng nhập</div>
                                    <div class="tittle-QR"></div>
                                    </div>
                                </div>
    
                                <div class="form-login-items">
                                    <input placeholder="Email/Số điện thoại/Tên đăng nhập" type="text" class="form-login-input" required>
                                    <input placeholder="Mật khẩu" type="password" class="form-login-input">
                                    <div class="btn btn-login">ĐĂNG NHẬP</div>
                                    <div class="form-option">
                                        <div class="form-option-link"><a href="">Quyên mật khẩu</a></div>
                                        <div class="form-option-link"><a href="">Đăng nhập với SMS</a></div>
                                    </div>
                                    <div class="form-login-other">
                                        <div class="form-login-other-tittle">
                                            <div class="form-login-other-tittle-eg"></div>
                                            <div class="form-login-other-tittle-text">HOẶC</div>
                                            <div class="form-login-other-tittle-eg"></div>

                                        </div>
                                        <div class="form-login-other-items">
                                            <div class="form-login-other-item">
                                                <p><i class="fa-brands fa-facebook"></i></p>
                                                <p>Facebook</p>
                                            </div>
                                            <div class="form-login-other-item mtr-8px">
                                                <p><i class="fa-brands fa-google"></i></p>
                                                <p>Google</p>
                                            </div>
                                            <div class="form-login-other-item">
                                                <p><i class="fa-brands fa-apple"></i></p>
                                                <p>Apple</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-login-link">
                                    <div class="form-login-link-content">
                                        <p class="form-login-link-content-label">Bạn mới biết đến Shop_Phone?</p>
                                        <a href="./register.html" class="form-login-link-register">Đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>

<?php
require_once('footer.php');
?>