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
$query = "SELECT * FROM `feedbacks` WHERE `id` = '$id'";
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
<form action="" method="post">
    <input type="text" name="name" placeholder="Название" value="<?=$data['name']?>">
    <input type="text" name="text" placeholder="Тип" value="<?=$data['text']?>">
    <input type="text" name="client" placeholder="Описание" value="<?=$data['client']?>">
    <input type="submit" name="update_feedback" value="Обновить запись">
</form>
<p><b>Запись в БД</b></p>
<p>Имя: <?=$data["name"];?></p>
<p>Текст: <?=$data["text"];?></p>
<p>Чей клиент: <?=$data["client"];?></p>
<?php
if(isset($_POST["update_feedback"]) 
&& isset($_POST["name"]) 
&& isset($_POST["text"]) 
&& isset($_POST["client"])){
    $name = $_POST["name"];
    $text = $_POST["text"];
    $client = $_POST["client"];
    $query = "UPDATE `feedbacks` SET `name` = '$name',`text` = '$text',`client` = '$client' WHERE `id` = '$id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
mysqli_close($db_server);
?>