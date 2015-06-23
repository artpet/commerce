//--------------------отправляем товары в корзину------------------------//
function addToCart(id, direction, msg, img) {
    var obj = {};
    obj[direction] = id;

    $.post("/addtocart.php", obj,
        onAjaxSuccess);

    function onAjaxSuccess() {
        // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
        //alert(data);
        var count = parseInt($('#cart-top').find('a').next().text());
        if (direction === 'addgoods') {
            $('#goods-msg').find('p').text('Commodity successfully added to cart!');
            $('#goods-msg').find('img').attr("src", "images/ok.png");
            //увеличиваем счетчик в шапке
            count++;
        } else if (direction === 'deletegoods') {
            $('#goods-msg').find('p').text('Commodity deleted from cart!');
            $('#goods-msg').find('img').attr("src", "images/cancel.png");
            count--;//уменьшаем счетчик в шапке
            if (count < 0) {
                count = 0
            }
        } else if (direction === 'rowdeletegoods') {
            $('#goods-msg').find('p').text('Position deletted from cart!');
            $('#goods-msg').find('img').attr("src", "images/cancel.png");
            count = $('#cart-main .tbl tr:last-child').find('td:nth-child(3)').find('span').text();
        }
        $('#cart-top').find('a').next().text(count);
        $('#goods-msg').fadeIn();
        $('#goods-msg').find('p').text(msg);
        setTimeout(function () {
            $('#goods-msg').fadeOut();
        }, 1500);
    };
};
//--------------------проверяем поля заполнения формы регистрации--------//
function checkRegForm() {
    $("#registration_name").on('keyup', function () {
        var reg = /^[a-z0-9_-]{3,16}$/;
        var tex = $(this).val();
        var elem = $('#registration_name');
        checkField(reg, tex, elem);

    });

    $("#registration_email").on('keyup', function () {
        var reg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
        var tex = $(this).val();
        var elem = $("#registration_email");
        checkField(reg, tex, elem);
    });

    $("#registration_password").on('keyup', function () {
        var reg = /^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}/;
        var tex = $(this).val();
        var elem = $("#registration_password");
        checkField(reg, tex, elem);
    });

    $("#registration_password_confirm").on('keyup', function () {
        var reg = /^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}/;
        var tex = $(this).val();
        var elem = $("#registration_password_confirm");
        checkField(reg, tex, elem);
    });

    function checkField(reg, tex, elem) {
        if (reg.test(tex) == true) {
            elem.next().find('p').text('Correct  ');
            elem.next().find('p').prepend('<img src="images/correct_1.gif">');
        } else {
            elem.next().find('p').text('Incorrect');
            elem.next().find('p').prepend('<img src="images/incorrect_2.gif">');
        }
    }
}
//--------------------обработка изменений в корзине----------------------//
function changeQuantityInCart() {
    resultCart();

    var reg = /^(index)\.(php)\?(goods)\_(detail)\=(\d{1,})/;

    function resultCart() { //итоговые суммы и кол-во
        var all_quantity = 0;
        var all_summary = 0;
        $('#cart-main').find('.cart-minus').next().each(function () {
            var tmp = parseInt($(this).text());
            all_quantity += tmp;
        });
        $('#cart-main').find('.cart-minus').parent().next().next('td').find('span').each(function () {
            var tmp = parseInt($(this).text());
            all_summary += tmp;
        });
        $('#cart-main .tbl tr:last-child').find('td:nth-child(3)').find('span').text(all_quantity);
        $('#cart-main .tbl tr:last-child').find('td:nth-child(5)').find('span').text(all_summary);

    };

    //удаление строки в корзине
    $('#cart-main').find('tr').find('.cart-delete').on('click', function () {
        var current_quantity = parseInt($(this).parent().parent().find('td .cart-minus').next().text());
        var current_price = parseInt($(this).parent().prev().prev().find('span').text());
        var row = $(this).parent().parent().find('td>a').attr('href');
        var id = row.replace(reg, "$5");

        var quantity_selector = $('#cart-main .tbl tr:last-child').find('td:nth-child(3)').find('span');
        var summary_selector = $('#cart-main .tbl tr:last-child').find('td:nth-child(5)').find('span');
        var all_quantity = parseInt(quantity_selector.text()) - current_quantity;
        var all_summary = parseInt(summary_selector.text()) - (current_price * current_quantity);
        quantity_selector.text(all_quantity);
        summary_selector.text(all_summary);

        $(this).parent().parent().remove();

        addToCart(id, 'rowdeletegoods');
    });

    //уменьшение кол-ва товаров
    $('#cart-main').find('.cart-minus').on('click', function () {
        var current_quantity = $(this).next().text();
        current_quantity = (parseInt(current_quantity, 10) - 1);
        if (current_quantity < 0) {
            current_quantity = 0;
        }
        $(this).next().text(current_quantity);
        var current_price = parseInt(($(this).parent().next('td').find('span').text()), 10);
        var current_summary = current_price * current_quantity;
        $(this).parent().next().next('td').find('span').text(current_summary);

        //отправка в обработчик на удаление из сессии

        var row = $(this).parent().prev().find('a').attr('href');
        var id = row.replace(reg, "$5");

        addToCart(id, 'deletegoods')

        resultCart();
    });
    //увеличение кол-ва товаров
    $('#cart-main').find('.cart-plus').on('click', function () {
        var current_quantity = $(this).prev().text()
        current_quantity = (parseInt(current_quantity, 10) + 1)

        $(this).prev().text(current_quantity)
        var current_price = parseInt(($(this).parent().next('td').find('span').text()), 10)
        var current_summary = current_price * current_quantity
        $(this).parent().next().next('td').find('span').text(current_summary);

        //отправка в обработчик на добавление в сессию
        var row = $(this).parent().prev().find('a').attr('href');
        var id = row.replace(reg, "$5");

        addToCart(id, 'addgoods');
        resultCart();
    });
}
function ordersList(){
    $.post("../ordercontroller.php", {
            get_orders: 'all'
        },
        onAjaxSuccess);

    function onAjaxSuccess(data) {
        var table = $('#add-orders-scroll .tbl');
        table.find('tr').remove();
        var s = $.parseJSON(data);
        for (var i =0;i< s.length;i++){
            count = i + 1;
            var order_number = s[i].order_number;
            var status = s[i].description;
            var date = s[i].date;
            table.append('<tr><td></td><td></td><td></td></tr>');
            table.find("tr:nth-child(" + count + ")").find('td:first-child').text(order_number);
            table.find("tr:nth-child(" + count + ")").find('td:first-child').next().text(date);
            table.find("tr:nth-child(" + count + ")").find('td:last-child').text(status);
        }
        viewOrder();
    }

}
function viewOrder() {
    $('#add-orders-scroll .tbl').find('tr').on('click', function () {
        var order_number = $(this).find('td:first-child').text();
        $.post("../ordercontroller.php", {
                order: order_number
            },
            onAjaxSuccess);

        function onAjaxSuccess(data) {
            var s = $.parseJSON(data);
            var count = s.length;//количество позиций(строк) в заказе
            var order_number = s[0].order_number;//номер заказа
            $('#current-order p').find('span:first-child').text(order_number);//вставляем номер заказа
            var user_name = s[0].name;//имя пользователя
            $('#current-order p').find('span:first-child').next().text(user_name);//вставляем имя пользователя
            var date = s[0].date;
            $('#current-order p').find('span:last-child').prev().text(date);//вставляем дату
            var table = $('#add-current-order-scroll .tbl');
            table.find('tr').remove();
            var all_quantity = 0;
            var summary = 0;
            for (var i = 0; i < s.length; i++) {
                count = i + 1;
                table.append("<tr><td></td><td></td><td></td></tr>");
                var goods = s[i].goods_name;
                var quantity = parseInt(s[i].quantity);
                all_quantity += quantity;
                var price = parseInt(s[i].price);
                summary += price;
                table.find("tr:nth-child(" + count + ")").find('td:first-child').text(goods);
                table.find("tr:nth-child(" + count + ")").find('td:first-child').next().text(quantity);
                table.find("tr:nth-child(" + count + ")").find('td:last-child').text(price);
            }
            table.append("<tr><td></td><td></td><td></td></tr>");
            count++;
            table.find("tr:nth-child(" + count + ")").find('td:first-child').next().text(all_quantity);
            table.find("tr:nth-child(" + count + ")").find('td:last-child').text(summary);
        }
    });
}
function btnProcessing() {
    $('#button-processed').on('click', function () {
        var order_number = $('#current-order p').find('span:first-child').text();
        $.post("../ordercontroller.php", {
            processed_order: order_number
        },
            onAjaxSuccess);
        function onAjaxSuccess(data) {
            alert(data);
            //$('#add-orders-scroll .tbl').find("tr:nth-child(" + count + ")").find('td:last-child').text('Processed');
            ordersList();
        }
    })
}
