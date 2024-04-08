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
    <title>Северобайкальский отряд</title>
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
        <div class="header3">
          <ul class="topmenu">
          <li><button href="index.php" class="down"><a href="index.php" class = "down1">Главная </a></button></li>
          <li><button href="Glavnaya.php" class="down"><a href ="Glavnaya.php" class = "down1"> Связь </a></button></li>
            <li><button href="podpiska.php" class="down"><a href="podpiska.php" class = "down2">Оргтехника</a></button></li>
            <li><button href="Kontack.php" class="down"><a href="Kontack.php" class = "down1"> КХО </a></button>
            <li><button href="Kontack1.php" class="down"><a href="Kontack1.php" class = "down1"> Сеть </a></button>
            <li><button href="Kontack2.php" class="down"><a href="Kontack2.php" class = "down2"> Радиостанция </a></button>
          </ul>
        </div>
        </div>
</header>
<h1 class="best_classKoord2">Северобайкальский отряд</h1>