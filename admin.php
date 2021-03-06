<?php
header('Cash-Control: no-store');
include 'inc/session.php';
//echo $inc_page;
if ($inc_page != admin)
    header('Location: index.php');
    //header('HTTP/1.0 404 Not Found');
    //header('Status: 404 Not Found');
    //http_response_code(404);
?>
<? include 'inc/header.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $commodity_name = $_POST['commodity_name'];
    $commodity_category = $_POST['commodity_category'];
    $commodity_price = $_POST['commodity_price'];
    $commodity_quantity = $_POST['commodity_quantity'];
    $db = new DB();
    $commodity_file = $db->uploadImg();
    $db->addNewGoods($commodity_name, $commodity_category, $commodity_file, $commodity_price, $commodity_quantity);
    header('Location: admin.php');
}
$db = new DB();
$result = $db->allGoodsViewsAdmin();
$select_result = $db->chooseCategory();
?>
    <body>
<div id="add-form">
    <form action="admin.php" method="post" enctype="multipart/form-data">
        <input id="add-form-name" autocomplete="off" autofocus="on" required name="commodity_name"
               placeholder="Name goods"
               type="text"/><label for="add-form-name">Name goods</label><br>

        <select id="add-form-category" required name="commodity_category">
            <option selected disabled value="#">Choose category</option>

            <?php foreach ($select_result as $i) {
                $id = $i['id'];
                $category = $i['category'];
                echo <<<LABEL
                <option value="$id">$category</option>
LABEL;
            }
            ?>
        </select><label for="add-form-category">Category</label><br>

        <input name="commodity_file" required id="add-form-file" type="file"/><label for="add-form-file">Add
            image</label><br>
        <input id="add-form-quantity" required name="commodity_quantity" placeholder="Quantity" type="text"/><label
            for="add-form-quantity">Quantity</label><br>
        <input id="add-form-price" required name="commodity_price" placeholder="Price" type="text"/><label
            for="add-form-price">Price</label><br>
        <input class="btn-adm-form" value="Send" type="submit"/><label for="add-form-send">Send form</label><br>
        <input class="btn-adm-form" value="Reset" type="reset"/><label for="reset-form-send">Reset form</label>
    </form>
</div>
<div id="add-table">
    <div>
        <table class="tbl">
            <caption>All <span>goods</span></caption>
            <tr>
                <td>Name</td>
                <td>Category</td>
                <td>File</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Date</td>
            </tr>
        </table>
    </div>
    <div id="add-table-scroll">
        <table class="tbl">
            <?php
            foreach ($result as $item) {
                $name = $item['name'];
                $category = $item['category'];
                $img = $item['img'];
                $price = $item['price'];
                $quantity = $item['quantity'];
                $date = $item['date'];
                echo <<<LABEL
                    <tr>
                    <td>$name</td>
                    <td>$category</td>
                    <td>$img</td>
                    <td>$price</td>
                    <td>$quantity</td>
                    <td>$date</td>
                    </tr>
LABEL;
            }
            ?>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        document.title = 'Add goods';
        $("#foot-slider").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 6,
            itemsDesktop : [1499,3],
            itemsDesktopSmall : [979,3]

        });
    });
</script>
<? include 'inc/footer.inc.php' ?>
