<html lang="ru">
<head>
<meta charset="utf-8"/>
        <title>Metronic "Asentus" Frontend Freebie</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="../vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="../css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../favicon.ico"/>
</head>
<?php
require_once "../db.php";
?>
<style>
    input{
        display: block;
        width: 100%;
        height: 50px;
        margin-bottom: 20px;
    }
</style>
<?php
$id = $_GET["id"];
$query = "SELECT * FROM `products` WHERE `id` = '$id'";
$result = mysqli_query($db_server, $query);
$data = mysqli_fetch_assoc($result);
?>
<div>
    <ul>
        <li><a href="index.php">Админка</a></li>
        <li><a href="products.php">Продукты</a></li>
        <li><a href="feedbacks.php">Отзывы</a></li>
    </ul>
</div>
<form action="" enctype="multipart/form-data"  method="post">
    <input type="text" name="title" placeholder="Название" value="<?=$data['title']?>">
    <input type="text" name="type" placeholder="Тип" value="<?=$data['type']?>">
    <input type="text" name="description" placeholder="Описание" value="<?=$data['description']?>">
    <input type="text" name="page" placeholder="Ссылка на страницу" value="<?=$data['page']?>">
    <input type="file" name="img" title="Выберите файл">
    <input type="submit" name="update_product" value="Обновить запись">
</form>
<p><b>Запись в БД</b></p>
<p>ФИО: <?=$data["title"];?></p>
<p>Паспорт: <?=$data["type"];?></p>
<p>Загранпаспорт: <?=$data["description"];?></p>
<p>Телефон: <?=$data["page"];?></p>
<img class='avatar' src="../img/970x647/<?=$data["img"];?>" alt='avatar'/>
<?php
if(isset($_POST["update_product"]) 
&& isset($_POST["title"]) 
&& isset($_POST["type"]) 
&& isset($_POST["description"]) 
&& isset($_POST["page"])){
    $title = $_POST["title"];
    $type = $_POST["type"];
    $description = $_POST["description"];
    $page = $_POST["page"];
    if($_FILES["img"]["name"] != null){
        $img = $_FILES["img"]['name'];
        $file = "../img/970x647/".$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $file); 
        $query = "UPDATE `products` SET `title` = '$title',`type` = '$type',`description` = '$description',
        `page` = '$page',`img` = '$img' WHERE `id` = '$id'";
    }
    else{
        $query = "UPDATE `products` SET `title` = '$title',`type` = '$type',`description` = '$description',
        `page` = '$page' WHERE `id` = '$id'";
    }
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
mysqli_close($db_server);
?>