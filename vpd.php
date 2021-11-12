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
    <title>VPD</title>
</head>
<body>

  <?php include './header.php';?>

  <section class = "header__bottom">
    <div class = "container">
      <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href = "products.php">Медиаплееры Sakura AdBox</a></li>
            <li class="breadcrumb-item"><a href = "pp_series.php">Мониторы Sakura PP</a></li>
            <li class="breadcrumb-item active" aria-current = "page">Мониторы Sakura VPD</li>
            <li class="breadcrumb-item"><a href="hb.php">Мониторы Sakura HB</a></li>
            <li class="breadcrumb-item"><a href="mw.php">Мониторы Sakura MW</a></li>
          </ol>
      </nav>
    </div>  
  </section> 
  
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

  <?php include './bigfooter.php';?> 

  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>  
  <script src ="./swiper/js/swiper.js"></script>
  <script src="./swiper/js/slider.js"></script>
</body>
</html>