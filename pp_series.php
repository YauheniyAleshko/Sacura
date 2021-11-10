<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel ="stylesheet" href = "./css/media.css">
    <link rel="stylesheet" href="./swiper/css/swiper.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Ppseries</title>
</head>
<body>

  <?php include './header.php';?>

  <section class = "header__bottom">
    <div class = "container">
      <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href = "#">Медиаплееры Sakura AdBox</a></li>
            <li class="breadcrumb-item active" aria-current = "page"><a>Мониторы Sakura PP</a></li>
            <li class="breadcrumb-item"><a href ="#">Мониторы Sakura VPD</a></li>
            <li class="breadcrumb-item"><a href="#">Мониторы Sakura HB</a></li>
            <li class="breadcrumb-item"><a href="#">Мониторы Sakura MW</a></li>
          </ol>
      </nav>
    </div>  
  </section>  
  
<section class = "product__expositionPP">
<div class = "container">
    <div class = "row production">
        <div class = "col-6 substrate">
        <div class = "swiper-container">
            <div
            <style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff "class="swiper mySwiper2">
          
            <div class="head swiper-wrapper">
              <div class="swiper-slide">
                <img src="../images/img (9).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (9).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (9).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (9).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (9).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (9).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (9).png" />
              </div>
            </div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="../images/img (10).png"/>
              </div>
              <div class="swiper-slide">
                <img src="../images/img (10).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (10).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (10).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (10).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (10).png" />
              </div>
              <div class="swiper-slide">
                <img src="../images/img (10).png" />
              </div>
            </div>
          </div>
          
          </div>
        </div>

        <div class = "col-6 substrate">
        <div class = "model__description">
            <span class = "title__series">СЕРИЯ ПРОФЕССИОНАЛЬНЫХ LCD ПАНЕЛЕЙ</span>
            <h4 class = "model__description_name">PP series (Professional Panel)</h4>
            <a class ="download" href = "#">Скачать инструкцию</a> 
            <a class ="download" href = "#">Работает на базе ПО «It-screens»</a>  
          </div>

        </div>
    </div>

    <div class = "row pp__description">
        <div class = "col-6 pp__left">
            <ul class = "ul__pp">
                <li>Сэнсорный экран</li>
                <li>Full HD</li>
                <li>3G</li>
                <li>Wi-Fi</li>
                <li><span class = "wrap__color">Доступные размеры диагоналей:</span> 32” 43” 49” 55” 65”</li>
                <li><span class = "wrap__color">Доступные стандартные интерфейсы подключения:</span> HDMI in/out, DVI in/out, DP in/out, VGA out, Audio out, RS 232, USB</li>
            </ul>

        </div>

        <div class = "col-6 pp__right">
            <p>Профессиональные мониторы Sakura серии PP (Professional Panel) предназначены для коммерческого использования. Мониторы обладают повышенной яркостью до 700 kDl/m2,
            широкими углами обзора (178°/178°), поддерживают режим
            работы 24/7, срок службы 50000 часов.
            Применяются для отображения
            информации как автономно,
            так и в составе облачного
            сервиса IT screen.
            Конструкция панели
            позволяет использовать
            ее в горизонтальном и
            вертикальном положениях.
</p>
        </div>

    </div> 
    
    <section class="offer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class = "slim">Возможно вам будет интерестно</h3>
          </div>

          <div class="col-md-6">
            <div class="offer__paragraf">
              Мы подобрали для вас самые популярные инструменты для создания выдающегося визуального стиля
            </div>
          </div>
        </div>
    </section>

    <?php include './popular-block.php';?>

</div>
</section>











  <?php include './bigfooter.php';?> 

    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>  
    <script src ="./swiper/js/swiper.js"></script>
    <script src="./swiper/js/slider.js"></script>
</body>
</html>