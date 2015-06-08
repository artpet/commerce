<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".slider").each(function () { // обрабатываем каждый слайдер
                var obj = $(this);
                $(obj).append("<div class='nav'></div>");
                $(obj).find("li").each(function () {
                    $(obj).find(".nav").append("<span rel='" + $(this).index() + "'></span>"); // добавляем блок навигации
                    $(this).addClass("slider" + $(this).index());
                });
                $(obj).find("span").first().addClass("on"); // делаем активным первый элемент меню
            });
        });
        function sliderJS(obj, sl) { // slider function
            var ul = $(sl).find("ul"); // находим блок
            var bl = $(sl).find("li.slider" + obj); // находим любой из элементов блока
            var step = $(bl).width(); // ширина объекта
            $(ul).animate({marginLeft: "-" + step * obj}, 500); // 500 это скорость перемотки
        }
        $(document).on("click", ".slider .nav span", function () { // slider click navigate
            var sl = $(this).closest(".slider"); // находим, в каком блоке был клик
            $(sl).find("span").removeClass("on"); // убираем активный элемент
            $(this).addClass("on"); // делаем активным текущий
            var obj = $(this).attr("rel"); // узнаем его номер
            sliderJS(obj, sl); // слайдим
            return false;
        });
    </script>
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link href="slider.js" rel="script" type="text/javascript">
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <title>Home</title>
</head>
<body>
<?include 'inc/header.inc.php'?>
    <div id="slider-out">

        <div id="slider-in" class="slider">
            <ul id="sul">
                <li><img src="images/banners/banner_slider1.jpg" alt=""></li>
                <li><img src="images/banners/banner_slider2.jpg" alt=""></li>
                <li><img src="images/banners/banner_slider3.jpg" alt=""></li>
                <li><img src="images/banners/banner_slider4.jpg" alt=""></li>
                <li><img src="images/banners/banner_slider5.jpg" alt=""></li>
            </ul>
            <div id="sdiv"></div>
        </div>
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
    <main id="products" class="tbl">
        <table>
            <caption>Featured<span>Products</span></caption>
            <tr>
                <td><a href=""><img src="images/005.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
                <td><a href=""><img src="images/006.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
                <td><a href=""><img src="images/007.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
                <td><a href=""><img src="images/008.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
            </tr>
            <tr>
                <td><a href=""><img src="images/009.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
                <td><a href=""><img src="images/010.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
                <td><a href=""><img src="images/011.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
                <td><a href=""><img src="images/012.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
            </tr>
            <tr>
                <td><a href=""><img src="images/013.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
                <td><a href=""><img src="images/014.jpg" alt="">

                    <p>Best Product<br><span>1234$</span>
                </a></td>
                <td><a href=""><img src="images/015.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
                <td><a href=""><img src="images/190.jpg" alt="">

                    <p>Best Product<br><span>1234$</span></p>
                </a></td>
            </tr>
        </table>
    </main>
<? include 'inc/footer.inc.php'?>