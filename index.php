<?php
    include 'cookie.php';
    include 'class.php';
?>

<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Тест</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
</head>
<body>
<h1>Привет, <span id="title_name">гость</span></h1>
    <?php
    if (!isset($_COOKIE['cookieAdv'])):
    ?>
    <div class="adv">РЕКЛАМНЫЙ БЛОК</div>
    <?php
    endif;
    ?>

    <form method="post" id="ajax_form" action="" >
        <input type="text" name="name" placeholder="Имя" /><br>
        <input type="text" name="phonenumber" placeholder="Телефон" /><br>
        <input type="button" id="btn" value="Отправить" />
    </form>

    <div id="result_form"></div>

<?php
    $animal = new Animal("Bob");
    echo "Имя животного: " . $animal->name;
?>
    
    <h2>Привет с GitHub!</h2>
</body>
</html>
