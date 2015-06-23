<? include 'inc/header.inc.php' ?>
<body>
<main id="products-new" class="tbl">
    <div id="goods-msg">
        <img>
        <p></p>
    </div>
    <table>
        <caption>New<span>Products</span></caption>
        <?php
        $db = new DB();
        $result = $db->selectGoodsByDate();

        $count_tr = 1;
        foreach ($result as $item) {
            $id = $item['id'];
            $name = $item['name'];
            $img = $item['img'];
            $price = $item['price'];
            switch ($count_tr) {
                case 1:
                    echo '<tr>';
                    include 'inc/label.inc.php';
                    break;
                case 2:
                    include 'inc/label.inc.php';
                    break;
                case 3:
                    include 'inc/label.inc.php';
                    break;
                case 4:
                    include 'inc/label.inc.php';
                    break;
                case 5:
                    include 'inc/label.inc.php';
                    echo '</tr>';
                    $count_tr = 1;
                    break;
            }
        }
        ?>
    </table>
</main>
<? include 'inc/footer.inc.php' ?>
<script>
    $(document).ready(function () {
        $(document).ready(function() {
            document.title = 'New goods';
        });
        $('#products-new').find('.buy_now').on('click', function () {
            var row = $(this).parent().prev().find('a').attr('href');
            var reg = /^(index)\.(php)\?(goods)\_(detail)\=(\d{1,})/;//index.php?goods_detail=$id"
            var id = row.replace(reg, "$5"); //id для отправки в корзину
            addToCart(id,'addgoods'); //отправляем в корзину
        });
        $("#foot-slider").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 6,
            itemsDesktop : [1499,3],
            itemsDesktopSmall : [979,3]

        });
    });

</script>