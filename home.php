<? include 'inc/header.inc.php' ?>
    <body>
    <div id="goods-msg">
        <img>
        <p></p>
    </div>

    <div id="slider-out">
        <div id="slider-in" class="slider">
            <!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container1">
                <div class="ws_images"><ul>
                        <li><img src="data1/images/banner_slider1.jpg" alt="50% Discount Insanity" title="50% Discount Insanity" id="wows1_0"/></li>
                        <li><img src="data1/images/banner_slider2.jpg" alt="Premium Products" title="Premium Products" id="wows1_1"/></li>
                        <li><img src="data1/images/banner_slider3.jpg" alt="Exclusive Offer" title="Exclusive Offer" id="wows1_2"/></li>
                        <li><a href="http://wowslider.com/vi"><img src="data1/images/banner_slider4.jpg" alt="image slider jquery" title="Red Hot Stuff" id="wows1_3"/></a></li>
                        <li><img src="data1/images/banner_slider5.jpg" alt="Summertime Discount" title="Summertime Discount" id="wows1_4"/></li>
                    </ul></div>
                <div class="ws_bullets"><div>
                        <a href="#" title="50% Discount Insanity"><span><img src="data1/tooltips/banner_slider1.jpg" alt="50% Discount Insanity"/>1</span></a>
                        <a href="#" title="Premium Products"><span><img src="data1/tooltips/banner_slider2.jpg" alt="Premium Products"/>2</span></a>
                        <a href="#" title="Exclusive Offer"><span><img src="data1/tooltips/banner_slider3.jpg" alt="Exclusive Offer"/>3</span></a>
                        <a href="#" title="Red Hot Stuff"><span><img src="data1/tooltips/banner_slider4.jpg" alt="Red Hot Stuff"/>4</span></a>
                        <a href="#" title="Summertime Discount"><span><img src="data1/tooltips/banner_slider5.jpg" alt="Summertime Discount"/>5</span></a>
                    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">angular carousel</a> by WOWSlider.com v8.1m</div>
                <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
            <!-- End WOWSlider.com BODY section -->
        </div>
    </div>
    <div id="home-middle-block">
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
    <main id="products" class="tbl">

        <table>
            <caption>Featured<span>Products</span></caption>
            <?php
            $order = new Order();
            $items = $order->mostPopular();
            $db = new DB();
            $count_tr = 1;
            foreach ($items as $item) {
                $id = $item[commodity];
                $goods = $db->getGoods($id);
                foreach ($goods as $commodity) {
                    $name = $commodity[name];
                    $img = $commodity[img];
                    $price = $commodity[price];
                }
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
                        echo '</tr>';
                        $count_tr = 1;
                        break;
                }
            }
            ?>

        </table>
    </main>
        </div>
<?include 'inc/footer.inc.php'?>
    <script>
        $(document).ready(function () {
            $('#products').find('.buy_now').on('click', function () {
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