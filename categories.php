<?php
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
        <title><?= $category ?></title>
    </head>
<body>
<? include 'inc/header.inc.php' ?>
<?php
$db = new DB();
$sel = $db->selectCategory($_GET['categories']);
foreach ($sel as $item)
    $category = $item['category'];
?>
    <main id="products-new" class="tbl">
        <table>
            <caption><?= $category ?></caption>
            <?php
            $result = $db->selectGoodsByCategories($_GET['categories']);
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