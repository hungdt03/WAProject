<?php
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

require_once('./config/config.php');

ob_start();

$title = 'Đăng nhập';
$mycss1 = './assets/css/login.css';
$mycss2 = '';



//if (isset($_SESSION['user'])) {
//    header('Location: index.php');
//    exit();
//}

$error = '';
$user = '';
$pass = '';

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (empty($user)) {
        $error = 'Please enter your username';
    } else if (empty($pass)) {
        $error = 'Please enter your password';
    } else if (strlen($pass) < 6) {
        $error = 'Password must have at least 6 characters';
    }
    else {
        $result = login($user, $pass);
        if ($result['code'] == 0) {
            $data = $result['data'];
            $_SESSION['user'] = $user;
            $_SESSION['name'] = $user;

            header('Location: index.php');
            exit();
        } else {
            $error = $result['error'];
        }
    }
}

require_once('header.php');
?>

    <div class="content" style="display: block; margin-top: 120px">
        <div class="container-fluid heading">
            <div style="border-radius: 4px;" class="container content__bg">
                <div class="form-login">
                    <div class="temp"></div>
                    <form method="post" action="" class="form">
                        <div class="form-login-info">
                            <div class="form-login-tittle">
                                <div class="form-login-tittle-info">
                                    <div class="tittle-form">Đăng nhập</div>
                                    <div class="tittle-QR"></div>
                                </div>
                            </div>

                            <div class="form-login-items">
                                <input name="user" id="user" value="<?= $user ?>" placeholder="Email/Số điện thoại/Tên đăng nhập" type="text" class="form-login-input" required>
                                <input name="pass" id="password" value="<?= $pass ?>" placeholder="Mật khẩu" type="password" class="form-login-input">
                                <?php
                                if (!empty($error)) {
                                    echo "<div class='alert alert-danger'>$error</div>";
                                }
                                ?>
                                <button type="submit" class="btn btn-login">ĐĂNG NHẬP</button>
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
                                    <a href="./register.php" class="form-login-link-register">Đăng ký</a>
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