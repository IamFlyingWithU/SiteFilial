<?php
require_once("helpers.php");
require_once("db.php");
session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="icon" href="img/logom.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tovari.css">
</head>
<body>
 <header class ="header2"> 
  <input type="checkbox" id="nav-toggle" hidden>
  

    
    <nav class="nav">

    
        <label for="nav-toggle" class="nav-toggle" onclick></label>
      

        
    </nav>
<div class="mask-content"></div>

    <div class="header">
      <a href="#"><img id="logo" src="img/logom.png"></a>
        <div class="header_right">
        <?php if (!isset($_SESSION['customerData'])){?>
            <a class="header_right" href="loginform.php">Войти</a>
        <?php }
        else {?>
           <a class="header_right" href="logout.php">Выйти</a>
        <?php }?>
        </div>

</select>
  </form>
</div>
</header>
<h1 class="best_classKoord2">Главная</h1>
<section class="section_best1">
    <ul class="ulotstup1">
        <li class="Otrydi"><button class="buttonOtryd" href="Filial.php" class="Otrydi"><a href="Filial.php" class="ae"> Управление филиала </li></button>
        <h1 class="best_classKoord1">Отряды</h1>
        <li class="Otrydi"><button class="buttonOtryd" href="Taishet.php" class="Otrydi"><a href="Taishet.php" class="ae"> Тайшетский отряд </li></button>
        <li class="Otrydi"><button class="buttonOtryd" href="Irkutsk.php" class="Otrydi"><a href="Irkutsk.php" class="ae"> Иркутский отряд </li></button>
        <li class="Otrydi"><button class="buttonOtryd" href="Ulan.php" class="Otrydi"><a href="Ulan.php" class="ae">Улан-Удэнский отряд </li></button>
        <li class="Otrydi"><button class="buttonOtryd" href="Severobaikalsk.php" class="Otrydi"><a href="Severobaikalsk.php" class="ae"> Северобайкальский отряд </li></button>
      </ul>
</section>
<?php
/*
<footer>
<div class="contr1">
<ul class="uuull">
  <li class="liiii"><a href="Glavnaya.php" class="buttonfooter">Что выбрать</a></li>
  <li class="liiii"><a href="index.php" class="buttonfooter">Библиотека</a></li>
  <li class="liiii"><a href="podpiska.php" class="buttonfooter">Подписка</a></li>
  <li class="liiii"><a href="Kontack.php" class="buttonfooter">Мой аккаунт</a></li>
</ul>
<h2 class="textstidi">Электронная библиотека "ЛитераГрад"</h2><br>
<a href="#"><img class="vk" src="img/vk1.png" alt="vk"></a>
<p class="text2023">© 2023, «ЛитераГрад»</p>
</div>
<div class="contr2">
<p class="textcontr2">Иркутск</p>
<p class="textcontr2">Севастопольская, 150</p>
<p class="textcontr2">ВТ-СБ</p>
<p class="textcontr2">10:00 - 20:00<br>(по предварительной записи)</p>
</div>
<div class="contr3">
  <p class="textcontr2">+7 999 420-1209</p>
</div>
</footer>*/
?>
<script src="script.js"></script>
</body>
</html>