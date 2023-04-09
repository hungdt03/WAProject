<?php
$title = 'Đăng ký';
$mycss1 = './assets/css/register.css';
$mycss2 = '';
require_once('header.php');
?>


    <div class="content" style="display: block; margin-top: 120px" >
            <div class="container heading">
                <div style="border-radius: 4px;" class="content__bg">
                    <div class="form-register">
                        <div class="temp"></div>
                        <form action="" class="form" method="get">
                            <div class="form-register-info">
                                <div class="form-register-tittle">
                                    <div class="form-register-tittle-info">
                                        <div class="tittle-form">Đăng ký</div>
                                    <div class="tittle-QR"></div>
                                    </div>
                                </div>

                                <div class="form-register-notes">
                                    <div style="color: var(--black-color);" class="form-register-note pb-15">Chú ý các nội dung có dấu * bạn cần phải nhập</div>
                                    <div style="color: red;" class="form-register-note erroInput"></div>
                                </div>
    
                                <div class="form-register-items">
                                    <input name="taiKhoan" placeholder="Tài khoản *" type="text" class="form-register-input" required>
                                    <input name="hoTen" placeholder="Họ tên *" type="text" class="form-register-input">
                                    <input name="matKhau" placeholder="Mật khẩu *" type="text" class="form-register-input">
                                    <input name="nhapLaiMatKhau" placeholder="Nhập lại mật khẩu *" type="text" class="form-register-input">
                                    <input name="email" placeholder="Email *" type="text" class="form-register-input">
                                    <div class="form-register-sex">
                                        <div class="sex mr-95"><input name="gender" value="Nam" type="radio" class="form-register-sex-check"><p>Nam</p></div>
                                        <div class="sex"><input name="gender" value="Nữ" type="radio" class="form-register-sex-check"><p>Nữ</p></div>
                                    </div>
                                    <input name="namSinh" placeholder="Ngày tháng năm sinh" type="text" class="form-register-input">
                                    <input name="dienThoai" placeholder="Điện thoại *" type="text" class="form-register-input">
                                    <input name="diaChi" placeholder="Địa chỉ *" type="text" class="form-register-input">
                                    <input name="tinh" placeholder="Tỉnh/Thành phố" type="text" class="form-register-input">
                                    <input name="huyen" placeholder="Quận/Huyện" type="text" class="form-register-input">
                                    <div class="btn btn-register register-event">ĐĂNG KÝ</div>
                                    <div class="form-register-other">
                                        <div class="form-register-other-tittle">
                                            <div class="form-register-other-tittle-eg"></div>
                                            <div class="form-register-other-tittle-text">HOẶC</div>
                                            <div class="form-register-other-tittle-eg"></div>

                                        </div>
                                        <div class="form-register-other-items">
                                            <div class="form-register-other-item">
                                                <p><i class="fa-brands fa-facebook"></i></p>
                                                <p>Facebook</p>
                                            </div>
                                            <div class="form-register-other-item mtr-8px">
                                                <p><i class="fa-brands fa-google"></i></p>
                                                <p>Google</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-register-link">
                                    <div class="form-register-link-content">
                                        <p class="form-register-link-content-label">Bạn đã có tài khoản?</p>
                                        <a href="./login.html" class="form-register-link-register">Đăng nhập</a>
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