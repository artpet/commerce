<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css">
    <title>Cart</title>
</head>
<body>
<? include 'inc/header.inc.php';
$db = new DB();
?>
<aside id="categories">
    <p>Categories</p>
    <ul>
        <li><a href="index.php?categories=1">Sound devices</a></li>
        <li><a href="index.php?categories=2">Video game consoles</a></li>
        <li><a href="index.php?categories=3">Cell/mobile/wireless phones</a></li>
        <li><a href="index.php?categories=4">Home security systems</a></li>
        <li><a href="index.php?categories=5">Cameras</a></li>
        <li><a href="index.php?categories=6">Home theater systems</a></li>
        <li><a href="index.php?categories=7">TVs</a></li>
        <li><a href="index.php?categories=8">Computers</a></li>
        <li><a href="index.php?categories=9">Games/movies/music</a></li>
        <li><a href="index.php?categories=10">Accessories</a></li>
        <li><a href="index.php?categories=11">Office</a></li>
        <li><a href="index.php?categories=12">House wears</a></li>
    </ul>
</aside>
<div id="cart-main">
    <form>
        <table class="tbl">
            <caption>Your <span>order</span></caption>

            <tr>
                <td>Position</td>
                <td>Name</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Sum of</td>
                <td>Remove</td>
            </tr>
            <?php
            $arr = $_SESSION['to_cart'];
            $count = 0;
            foreach ($arr as $key => $value) {
                $id = $key;
                $count++;
                $result = $db->userCart($id);

                foreach ($result as $item) {
                    $name = $item['name'];
                    $price = $item['price'];
                }
                $sum = $value * $price;
                $sumof += $sum;
                $sumitems+=$value;
                echo <<<LABEL
                <tr>
                    <td>$count</td>
                    <td><a href="$id">$name</a></td>
                    <td>$value</td>
                    <td>$price</td>
                    <td>$sum</td>
                    <td><a href="index.php?delete_from_cart=$id"><img alt="Delete item" title="Delete item" src="images/my/trash.png"></a></td>
                </tr>
LABEL;
            }
            ?>

            <tr>
                <td></td>
                <td>All</td>
                <td><?=$sumitems?></td>
                <td></td>
                <td><?= $sumof ?></td>
            </tr>

        </table>
        <input class="contact-form-btn" type="submit" value="Confirm">
    </form>
</div>
<? include 'inc/footer.inc.php' ?>
</body>
</html>