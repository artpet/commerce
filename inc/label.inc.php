<?php
        echo <<<LABEL
    <td>
        <div class="img_space">
            <img title = "Add to cart" src="$img" alt="$name">
            <div class="img_space_name">
                <a href="index.php?goods_detail=$id""><p>$name</p></a>
            </div>
            <p><span  class="product-price">$price$</span><img class="buy_now" src="../images/buy_now.png"></p>
        </div>
    </td>
LABEL;
$count_tr++;
