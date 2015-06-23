<?php
?>
<div id="logged">
    <p>Hi! <a href="index.php?view=account"><?=$_SESSION['user_login']?></a></p>
    <a href="index.php?view=admin_panel">Add goods</a><a href="index.php?view=admin_orders">Orders</a></a><a href="index.php?view=logout">Logout</a>
</div>