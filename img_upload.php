<?php
// Каталог, в который мы будем принимать файл:
$uploaddir = 'files/';
$file_name = $_POST['commodity_name'].'.';
$file_type = $_FILES['commodity_file']['type'];
#$temp = $_FILES['commodity_file']['name'];
$uploadfile = $uploaddir.$file_name.$file_type;#$temp;
echo $file_name;#$temp;
#echo $uploadfile;
// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['commodity_file']['tmp_name'], $uploadfile)) {
    echo "<h3>Файл успешно загружен на сервер</h3><br>";
    echo $uploadfile;
} else {
    echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3><br>";
    var_dump($file_type);
    echo '<br>';
    echo $uploadfile;
    echo "<img src='files/aazz'>";

    exit;
}

// Выводим информацию о загруженном файле:
echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: " . $_FILES['commodity_file']['name'] . "</b></p>";
echo "<p><b>Mime-тип загруженного файла: " . $_FILES['commodity_file']['type'] . "</b></p>";
echo "<p><b>Размер загруженного файла в байтах: " . $_FILES['commodity_file']['size'] . "</b></p>";
echo "<p><b>Временное имя файла: " . $_FILES['commodity_file']['tmp_name'] . "</b></p>";
