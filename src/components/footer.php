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

<div class="footer-form-container" id="contato">
  <div class="footer-form">
    <div class="footer-menu-contat">
      <h1>Venha bater um papo com nós</h1>
      <p>fone 00000-0000</p>
      <p>Email: contato@inpakta.com.br</p>
      <p id="redes-sociais">nos acompanhe nas redes sociais</p>
      <?php include('sociais.php') ?>
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
        <li class="home">
          <a href="#inpakta">A InPakta</a>
        </li>
        <li class="home">
          <a href="#missao">Missão</a>
        </li>
        <li class="home">
          <a href="#solucoes">Soluções</a>
        </li>
      </ul>
    </div>
    <div class="footer-menu">
      <ul class="footer-links">
        <li class="historia">
          <a href="#historia">Nossa História</a>
        </li>
        <li class="historia">
          <a href="#conquistas">Conquistas</a>
        </li>
        <li>
          <a href="#contato">Contato</a>
        </li>
      </ul>
    </div>
    <div class="footer-menu">
      <ul class="footer-links">
        <li>
          <a>Blog</a>
        </li>
        <li>
          <a href="#contato">Newsletter</a>
        </li>
      </ul>
    </div>
    <div class="footer-sociais">
      <?php include('sociais.php') ?>
    </div>
    
  </div>
</footer>