<?php
header('Cash-Control: no-store');
include 'classes/Order.class.php';
include 'inc/session.php';
//echo $inc_page;
if ($inc_page != admin)
    header('Location: index.php');
?>
<? include 'inc/header.inc.php'; ?>
    <body>
    <div id="orders">
        <div id="all-orders">
            <table class="tbl">
                <caption>Orders</caption>
                <tr>
                    <td>Order</td>
                    <td>Date</td>
                    <td>Status</td>
                </tr>
            </table>
            <div id="add-orders-scroll">
                <table class="tbl">
                </table>
            </div>
        </div>
        <script>$(document).ready(function () {
                    document.title = 'Orders';
                ordersList();
                $("#foot-slider").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds

                    items : 6,
                    itemsDesktop : [1499,3],
                    itemsDesktopSmall : [979,3]

                });
               // setTimeout(viewOrder,500);
            });
        </script>
        <div id="current-order">
            <p>№ Order:<span></span> User:<span></span> Date <span></span> Phone:
                <span></span></p>
            <table class="tbl">
                <tr>
                    <td>Goods</td>
                    <td>Quantity</td>
                    <td>Price</td>
                </tr>
            </table>
            <div id="add-current-order-scroll">
                <table class="tbl">
                </table>
            </div>
        </div>
        <button id="button-processed">Processing</button>
        <script>$(document).ready(function(){
                btnProcessing();
            })</script>
    </div>

    </body>
<? include 'inc/footer.inc.php' ?>