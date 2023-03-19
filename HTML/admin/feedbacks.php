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
<form action="" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="text" placeholder="Текст">
    <input type="text" name="client" placeholder="Чей клиент">
    <input type="submit" name="add_feedback" value="Добавить запись">
</form>
<div>
<?php
    $query = "SELECT * FROM `feedbacks` ORDER BY `id`";
    $data = mysqli_query($db_server, $query);
    while($item = mysqli_fetch_array($data, MYSQLI_ASSOC)){
        $text_array = explode('.', $item["text"]);
        $text_part_1 = "";
        $text_part_2 = "";
        for($index = 0; $index < count($text_array); $index++){
            if(strlen($text_part_1) < 200){
                $text_part_1 = $text_part_1.$text_array[$index].".";
            }
            else{
                $text_part_2 = $text_part_2.$text_array[$index];
            }
        }
        echo
        /*'<div class="swiper-slide">*/
            '<blockquote class="blockquote">
                <div class="margin-b-20">'.
                    $text_part_1.
                '</div>
                <div class="margin-b-20">'.
                    $text_part_2.
                '</div>
                <p><span class="fweight-700 color-link">'.$item['name'].'</span>, '.$item['client'].'</p>
            </blockquote>'.
            "<form action='' method='post'>".
                "<input type='hidden' name='id' value='$item[id]'/>".
                "<input type='submit' name='delete_feedback' value='Удалить'/>".
            "</form>".
            "<a href='edit_feedback.php?id=$item[id]'>Редактировать</a>"
        /*'</div>'*/;
    }
    ?>      
</div>
<?php
if(isset($_POST["add_feedback"]) 
&& isset($_POST["name"]) 
&& isset($_POST["text"]) 
&& isset($_POST["client"])){
    $name = $_POST["name"];
    $text = $_POST["text"];
    $client = $_POST["client"];
    $query = "INSERT INTO `feedbacks` (`name`,`text`,`client`) 
    VALUE ('$name', '$text', '$client');";  
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
if(isset($_POST["delete_feedback"])){
    $id = $_POST["id"];
    $query = "DELETE FROM `feedbacks` WHERE `id` = '$id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
mysqli_close($db_server);
?>
