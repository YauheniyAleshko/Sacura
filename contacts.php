<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel ="stylesheet" href = "../css/media.css">
  <link rel="stylesheet" href="../swiper/css/swiper.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <title>contacts</title>
</head>

<body>

<?php include './header.php';?>

<section class="offer groundpage">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Контакты</h3>
        </div>

        <div class="col-md-6">
          <div class="offer__paragraf">
          Мы открыты для любого нового сотрудничества и поэтому всегда рады ответить на ваши вопросы
          </div>
        </div>
      </div>
</section>

<section class="form-mess cont">
  <div class="container g-0">
    <div class="row">
      
      <div class="col-md-7">
        <div class="wrap__contacts">
          <h4 class = "line3">Контактная информация</h4>
          <ul>
              <li><a href = "#"><img class = "icon_pred" src = "./images/bx-map.svg">Город, ул. Независимости, д. 91</a></li>
              <li><a href = "#"><img class = "icon_pred" src = "./images/trubka.svg">+1 (234) 6457585</a></li>
              <li><a href = "#"><img class = "icon_pred" src = "./images/convert.svg">help@sakura.com</a></li>
          </ul>
          <h4>Мы в соцсетях</h4>
          <a href = "#"><span class = "face"><img class ="iconred" src = "./images/Facebook_black.svg">Facebook</span></a>
          <a href = "#"><span><img class ="iconred" src = "./images/Instagram_black.svg">Instagram</span></a>
          </div>
      </div>

      <div class="col-md-5">
        <form class = "form-foot">
            <p class = "title__form">Остались какие-то вопросы? Напишите нам!</p>
          <div class="form-group">
            <input type="text" class="form-control2"  placeholder="Ваше имя">
          </div>
          
          <div class="form-group">
            <input type="email" class="form-control2"  placeholder="E-mail">
          </div>

          <div class="form-group">
            <textarea class="form-control2 message" placeholder="Введите свое сообщение здесь"></textarea>
          </div>

          <button type="submit" class="btn btn-primary btn-form" >Отправить сообщение<img src = "/images/arrowBtn.svg"></button>
        </form>
      </div>   
    </div>
  </div>
</section>

<?php include 'footer.php';?>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../swiper/js/swiper.js"></script>
<script src="../swiper/js/slider.js"></script>
</body>

</html>
