    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
        <title>New Goods</title>
    </head>
<body>
<? include 'inc/header.inc.php' ?>
    <main id="products-new" class="tbl">
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