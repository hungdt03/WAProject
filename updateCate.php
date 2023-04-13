<!-- <?php
    require_once('./models/Category.php');

    if (!isset($_GET['update']) ) {
        die(json_encode(array('status' => false, 'data' => 'Parameters not valid')));
    }

    
    $id = (int) $_GET['update'];

    $cate = Category::get($id);

    if(!$cate && Category::update($cate)) {
        header('location: index.php');
    }
    
    die("Something went wrong");
    
?> -->
