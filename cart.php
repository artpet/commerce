
<?include 'inc/header.inc.php';
$db = new DB();
?>
<body>
<div id="goods-msg">
    <img>
    <p></p>
</div>
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
    <form action="ordercontroller.php" method="post">
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
                $sumitems += $value;
                echo <<<LABEL
                <tr>
                    <td>$count</td>
                    <td><a href="index.php?goods_detail=$id">$name</a></td>
                    <td><img class="cart-minus" src="images/minus.png"><span>$value</span><img class="cart-plus" src="images/plus.png"></td>
                    <td><span>$price</span></td>
                    <td><span>$sum</span></td>
                    <td><img class="cart-delete" alt="Delete item" title="Delete item" src="images/my/trash.png"></a></td>
                </tr>
LABEL;
            }
            ?>
            <tr>
                <td></td>
                <td>All</td>
                <td><span><?= $sumitems ?></span></td>
                <td></td>
                <td><span><?= $sumof ?></span></td>
            </tr>
        </table>
        <input class="contact-form-btn" type="submit" value="Confirm">
    </form>
</div>
<script>$(document).ready(function () {
     changeQuantityInCart();
        $("#foot-slider").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 6,
            itemsDesktop : [1499,3],
            itemsDesktopSmall : [979,3]
        });
    });
</script>
<? include 'inc/footer.inc.php' ?>
</body>
</html>