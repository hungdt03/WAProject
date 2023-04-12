<?php
include_once './config/config.php';
include_once './config/function.php';

ob_start();

$title = 'Giỏ hàng';
$mycss1 = './assets/css/product.css';
$mycss2 = './assets/css/cart.css';
require_once('header.php');

function pdo_connect_mysql()
{
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'webbanhang';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {

        exit('Failed to connect to database!');
    }
}

$pdo = pdo_connect_mysql();
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM product WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location: cart.php');
    exit;
}


// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}


// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: cart.php');
    exit;
}


// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: placeorder.php');
    exit;
}


// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM product WHERE id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}

ob_end_flush();
?>

    <main style="margin-top: 100px">
        <div class="cart content-wrapper">
            <h1>Giỏ hàng</h1>
            <form action="cart.php" method="post">
                <table>
                    <thead>
                    <tr>
                        <td colspan="2">Sản phẩm</td>
                        <td>Giá</td>
                        <td>Số lượng</td>
                        <td>Tổng cộng</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (empty($products)): ?>
                        <tr>
                            <td colspan="5" style="text-align:center;">Bạn chưa thêm sản phẩm nào vào Giỏ hàng
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td class="img">
                                    <a href="detailProduct.php?id=<?= $product['id'] ?>">
                                        <img src="./assets/images/<?= $product['image'] ?>" width="50" height="50"
                                             alt="<?= $product['name'] ?>">
                                    </a>
                                </td>
                                <td>
                                    <a href="detailProduct.php?id=<?= $product['id'] ?>"><?= $product['name'] ?></a>
                                    <br>
                                    <a href="cart.php?remove=<?= $product['id'] ?>" class="remove">Remove</a>
                                </td>
                                <td class="price"><?= $product['price'] ?>₫</td>
                                <td class="quantity">
                                    <input type="number" name="quantity-<?= $product['id'] ?>"
                                           value="<?= $products_in_cart[$product['id']] ?>" min="1"
                                           max="<?= $product['quantity'] ?>" placeholder="Quantity" required>
                                </td>
                                <td class="price"><?= $product['price'] * $products_in_cart[$product['id']] ?>₫</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
                <div class="subtotal">
                    <span class="text">Tổng tiền thanh toán</span>
                    <span class="price"><?= $subtotal ?>₫</span>
                </div>
                <div class="buttons">
                    <input type="submit" value="Cập nhật" name="update">
                    <input type="submit" value="Đặt hàng" name="placeorder">
                </div>
            </form>
        </div>
    </main>

<?php
require_once 'footer.php';
?>