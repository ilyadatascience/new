<?php

declare(strict_types=1);

$uploaddir = '.' . DIRECTORY_SEPARATOR . 'upload/';

if ($_POST['file_name'] === "" || $_FILES['content']['name'] === "") {
    header('Location: /form.html');
} else {
    $uploadfile = $uploaddir . $_POST['file_name'];
}

if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile)) {
    echo 'Файл успешно загружен!<br>';
    echo 'Файл загружен в директорию: ' . realpath($uploadfile) . '<br>';
    echo 'Размер файла: ' . $_FILES['content']['size'] . ' Кбайт';
}
