<?php
require_once('./config/config.php');
$title = 'Đăng ký';
$mycss1 = './assets/css/register.css';
$mycss2 = '';
$error = '';
$user = '';
$pass = '';
$pass_confirm = '';
$fullname = '';
$email = '';
$gender = '';
$dob = '';
$phone = '';
$address = '';


if (isset($_POST['user'])&& isset($_POST['pass'])
    && isset($_POST['fullname']) && isset($_POST['pass']) && isset($_POST['pass-confirm']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass_confirm = $_POST['pass-confirm'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if (empty($fullname)) {
        $error = 'Please enter your full name';
    }
    else if (empty($email)) {
        $error = 'Please enter your email';
    }
    else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $error = 'This is not a valid email address';
    }
    else if (empty($user)) {
        $error = 'Please enter your username';
    }
    else if (empty($pass)) {
        $error = 'Please enter your password';
    }
    else if (strlen($pass) < 6) {
        $error = 'Password must have at least 6 characters';
    }
    else if ($pass != $pass_confirm) {
        $error = 'Password does not match';
    }
    else {
        // register a new account
        $result = register($user, $pass, $fullname, $email, $gender, $dob, $phone, $address);
        if($result['code'] == 0){
            // success
        }else if ($result['code'] == 1){
            $error = 'This email is already exists';
        }else{
            $error = 'An error occurred. Try again later';
        }
    }
}

require_once('header.php');
?>

    <div class="content" style="display: block; margin-top: 120px" >
            <div class="container heading">
                <div style="border-radius: 4px;" class="content__bg">
                    <div class="form-register">
                        <div class="temp"></div>
                        <form action="" class="form" method="post">
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
                                    <input value="<?= $user?>" name="user" required placeholder="Tài khoản *" type="text" class="form-register-input" required>
                                    <input value="<?= $fullname?>" name="fullname" required placeholder="Họ tên *" type="text" class="form-register-input">
                                    <input value="<?= $pass?>" name="pass" placeholder="Mật khẩu *" type="password" class="form-register-input">
                                    <input value="<?= $pass_confirm?>" name="pass-confirm" required placeholder="Nhập lại mật khẩu *" type="password" class="form-register-input">
                                    <input value="<?= $email?>" name="email" required placeholder="Email *" type="email" class="form-register-input">
                                    <div class="form-register-sex">
                                        <div class="sex mr-95"><input name="gender" value=0 type="radio" checked="checked" class="form-register-sex-check"><p>Nam</p></div>
                                        <div class="sex"><input name="gender" value=1 type="radio" class="form-register-sex-check"><p>Nữ</p></div>
                                    </div>
                                    <input value="<?= $dob?>" name="dob" required placeholder="Ngày tháng năm sinh" type="date" class="form-register-input">
                                    <input value="<?= $phone?>" name="phone" required placeholder="Điện thoại *" type="text" class="form-register-input">
                                    <input value="<?= $address?>" name="address" required placeholder="Địa chỉ *" type="text" class="form-register-input">
                                    <input name="tinh" placeholder="Tỉnh/Thành phố" type="text" class="form-register-input">
                                    <input name="huyen" placeholder="Quận/Huyện" type="text" class="form-register-input">
                                    <?php
                                    if (!empty($error)) {
                                        echo "<div class='alert alert-danger'>$error</div>";
                                    }
                                    ?>
                                    <button type="submit" class="btn btn-register register-event">ĐĂNG KÝ</button>
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