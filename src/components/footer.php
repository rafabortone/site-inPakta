<?php
require_once 'database/Database.class.php';
if(isset($_GET['contato'])){

    $pdo = Database::conexao();
        $stmt = $pdo->prepare('INSERT INTO 01_contatos (nome, email, texto) values(:nome,:email,:texto)');
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $coment = $_POST['coment'];
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':texto', $coment, PDO::PARAM_STR);

        $stmt->execute();
        $pdo->close();
        $stmt->close();
}


?>
<!--Importação do estilo do HEADER-->
<link rel="stylesheet" type="text/css" href="./styles/footer.css">

<div class="footer-form-container">
  <div class="footer-form">
  <div class="footer-menu-contat">
    <h1>Venha bater um papo com nós</h1>
    <p>fone 00000-0000</p>
    <p>Email: contato@inpakta.com.br</p>
    

    <p id="redes-sociais">nos acompanhe nas redes sociais</p>
    <ul>

      <li id="facebook">
        <?php include('icons/icon-facebook.php')?>
      </li>
      <li id="twitter">
        <?php include('icons/icon-twitter.php')?>
      </li>
      <li id="instagram">
        <?php include('icons/icon-instagram.php')?>
      </li>
      <li id="youtube">
        <?php include('icons/icon-youtube.php')?>
      </li>
      <li id="linkedin">
        <?php include('icons/icon-linkedin.php')?>
      </li>
    </ul>
  </div>
  </div>
  <div class="footer-form">
      
      <form class='container-form' method="POST" action="?contato">
        <div class="inputgroup">
          <input id="Nome" name="Nome"  type="text"  required placeholder="Nome"/>
          <input id="Email" name="Email" type="email" required placeholder="Email"/>
        </div>
          
          <textarea id="coment" name="coment" placeholder="como podemos te ajudar?"></textarea>
          <button type="submit">Inscrever</button>
      </form>
  </div>

</div>

<footer class="footer-container">
  <div class="footer-wrapper">
    <div class="footer-menu">
      <ul class="footer-links">
        <li>
          <a>Sobre nós</a>
        </li>
        <li>
          <a>Porque a InPalta</a>
        </li>
        <li>
          <a>Nossos Serviços</a>
        </li>
        <li>
          <a>Precificação</a>
        </li>
      </ul>
    </div>
    <div class="footer-menu">
      <ul class="footer-links">
        <li>
          <a>Nossa História</a>
        </li>
        <li>
          <a>Conquistas</a>
        </li>
        <li>
          <a>Nossos Serviços</a>
        </li>
        <li>
          <a>Precificação</a>
        </li>
      </ul>
    </div>
    <div class="footer-menu">
      <ul class="footer-links">
        <li>
          <a>Sobre nós</a>
        </li>
        <li>
          <a>Porqu a InPalta</a>
        </li>
        <li>
          <a>Nossos Serviços</a>
        </li>
        <li>
          <a>Precificação</a>
        </li>
      </ul>
    </div>
    <div class="footer-contato">
      <h1>whatsapp?</h1>
    </div>
  </div>
</footer>