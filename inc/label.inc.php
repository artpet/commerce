<?php
        echo <<<LABEL
    <td><a href="index.php?goods=$id"><div class='img_space'><img title = "Add to cart" src="$img" alt="$name">

        <p>$name<br><span>$price$</span></p>
    </a></td>
LABEL;
$count_tr++;