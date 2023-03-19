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
<div>
    <ul>
        <li><a href="index.php">Админка</a></li>
        <li><a href="products.php">Продукты</a></li>
        <li><a href="feedbacks.php">Отзывы</a></li>
    </ul>
</div>
<form action="" enctype="multipart/form-data" method="post">
<input type="text" name="title" placeholder="Название">
    <input type="text" name="type" placeholder="Тип">
    <input type="text" name="description" placeholder="Описание">
    <input type="text" name="page" placeholder="Ссылка на страницу">
    <input type="file" name="img" title="Выберите файл">
    <input type="submit" name="add_product" value="Обновить запись">
</form>
<div>
    <?php 
        $query = "SELECT * FROM `products` ORDER BY `id`";
        $data = mysqli_query($db_server, $query);
        if (!$data) die ("Сбой при доступе к БД: " . mysqli_error($db_server));
        if(mysqli_num_rows($data) > 0){
            $count = 0;
            $div_closed = true;
            while($item = mysqli_fetch_array($data, MYSQLI_ASSOC)){
                $count++;
                if($count == 1){
                    echo "<div class='row margin-b-50'>";
                    $div_closed = false;
                }
                echo 
                "<div class='col-sm-4 sm-margin-b-50'>".
                    "<div class='margin-b-20'>".
                        "<div class='wow zoomIn' data-wow-duration='.3' data-wow-delay='.1s'>".
                            "<img class='img-responsive' src=../img/970x647/$item[img] alt='Latest Products Image'>".
                        "</div>".
                    "</div>".
                    "<h4><a href='$item[page]'>$item[title]</a> <span class='text-uppercase margin-l-20'>$item[type]</span></h4>".
                    "<p>$item[description]</p>".
                    "<a class='link' href=$item[page]>Read More</a>".
                    "<form action='' method='post'>".
                        "<input type='hidden' name='id' value='$item[id]'/>".
                        "<input type='submit' name='delete_products' value='Удалить'/>".
                    "</form>".
                    "<a href='edit_product.php?id=$item[id]'>Редактировать</a>".
                "</div>";
                if($count == 3){
                    echo "</div>";
                    $count = 0;
                    $div_closed = true;
                }                      
            }
        }
        if($div_closed == false){
            echo "</div>";
        }
    ?>           
</div>
<?php
if(isset($_POST["add_product"]) 
&& isset($_POST["title"]) 
&& isset($_POST["type"]) 
&& isset($_POST["description"]) 
&& isset($_POST["page"])
&& $_FILES["img"]["name"] != null){
    $title = $_POST["title"];
    $type = $_POST["type"];
    $description = $_POST["description"];
    $page = $_POST["page"];
    $img = $_FILES["img"]["name"];
    $file = "../img/970x647/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $file); 
    $query = "INSERT INTO `products` (`title`,`type`,`description`,`page`,`img`) 
    VALUE ('$title', '$type', '$description', '$page', '$img');";  
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
if(isset($_POST["delete_products"])){
    $id = $_POST["id"];
    $query = "DELETE FROM `products` WHERE `id` = '$id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
mysqli_close($db_server);
?>
