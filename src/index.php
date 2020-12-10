<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-status-bar-style", content="black-translucent">
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/slick.css">
  <link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/headroom.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  

  <title>inPakta</title>
</head>
<body>

  <?php include('components/header.php')?>
  <div class="ajuste-header"></div>
  
  <div class="index">

    <div class="content" id="section-home">
      <?php 
        include('pages/home.php');
      ?>
    </div>

    <div class="content hiden" id="section-historia">
      <?php 
        include('pages/historia.php');
      ?>
    </div>
    
  </div>

  <?php
    include('components/footer.php');
  ?>
<script type="text/javascript" src="scripts/global.js"></script>
</body>
</html>