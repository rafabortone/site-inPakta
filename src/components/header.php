
<!--Importação do estilo do HEADER-->
<link rel="stylesheet" type="text/css" href="./styles/header.css">

<header class="header">
  <div class="header-container">
    <div class="header-icons">
      <div class="header-icon-menu">
        <?php include('./assets/menu.php')?>
      </div>
      <div class="header-logo">
        <?php include('logo.php')?>
      </div> 
    </div>
    <nav>
      <ul class="header-links">
        <li class="home active">
          <a href="#">home</a>
        </li>
         <li class="historia"> 
          <a href="#">nossa história</a>
        </li>
         <li>
          <a href="#">blog</a>
        </li>
         <li>
          <a href="#contato">contato</a>
        </li>
        <li id="acesso">
          <a href="#">Acessar sua conta</a>
        </li>
      </ul>
    </nav>
  </div>  
</header>

<script type="text/javascript" src="../scripts/header.js"></script>
