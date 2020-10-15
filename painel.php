<?php
session_start();
include('php/verifica_login.php');
include('php/gerenciador_tarefa.php');


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina</title>
    <script language="JavaScript" src="js/slidebar.js"></script>
    <link rel="stylesheet" href="css/painel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body id="body">
    <header>
      <div  id="topo">
        <h2>Olá   <?php echo $_SESSION['usuario'];?></h2>
        <a class="btn btn-primary" href="https://calendar.google.com/calendar/r" role="button">Calendario</a>
        <a class="btn btn-success" href="https://docs.google.com/spreadsheets/u/0/" role="button">Planilha</a>
        <a  class="btn btn-dark" href="php/logout.php" role="button">Sair</a>
      </div>
    </header>
    <section>
      <table class=" table table-hover table-striped table-bordered">
        <thead>
          <th >Tarefa</th>
          <th >Descricao Tarefa</th>
          <th >Data Tarefa</th>
          <th >Concluido</th>
        </thead>
        <tbody>
          <?php foreach($registros as $registro): ?>
          <tr>
            <td ><?= $registro['titulo']?></td>
            <td ><?= $registro['descricao']?></td>
            <td ><?= date('d/m/yy', strtotime($registro['data_']))?></td>
            <td ><a href="painel.php?excluir=<?= $registro['Id'] ?>" class="btn btn-danger">Excluir</a></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </section>
    <section>
      <div class="container">
        <form action="php/tarefa.php" method="post">
          <div class="row">
            <div class="col-25">
              <label for="fname">Tarefa</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="titulo" palceholder="Tarefa">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Data</label>
            </div>
            <div class="col-75">
              <input type="date" id="lname" name="data" placeholder="Data">
            </div>
          </div>
          <div class="row hidden" style="display: none;">
            <div class="col-25">
              <label for="email">E-mail</label>
            </div>
            <div class="col-75 hide" style="display: none;">
              <select id="email" name="email" class="hidden">
                <option value="<?php echo $_SESSION['usuario'];?>"><?php echo $_SESSION['usuario'];?></option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="subject">Descrição</label>
            </div>
            <div class="col-75">
              <textarea for="subject" name="descricao" placeholder="Detalhes" style="height:200px"></textarea>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Criar Tarefa">
          </div>
        <form>
      </div>
    </section>
    <footer>
      <div class="containere">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <h3>Noticias</h3>
              <ul class="list-unstyled three-column">
                <a target="blank" href="https://oglobo.globo.com/"><li>O Globo</li></a>
                <a target="blank" href="https://www.theguardian.com/world/all"><li>The Guardian</li></a>
                <a target="blank" href="https://www.usatoday.com/"><li>USA Today</li></a>
                <a target="blank" href="http://www.bandnewsfm.com.br/"><li>Band News</li></a>
                <a target="blank" href="https://brasil.elpais.com/"><li>El Pais</li></a>
                <a target="blank" href="https://www.nytimes.com/"><li>The New York Times</li></a>
                <a target="blank" href="https://olhardigital.com.br/9"><li>Olhar Digital</li></a>
                <a target="blank" href="https://www.chicagotribune.com/"><li>Chicago Tribune</li></a>
              </ul>
              <ul class="list-unstyled socila-list">
                <a target="blank" href="https://www.linkedin.com/m/login/"><li><img src="imagens/icons/linkn.png" width="50px" height="50px"/></li></a>
                <a target="blank" href="https://pt-br.facebook.com/"><li><img src="imagens/icons/facebook.png" width="50px" height="50px"/></li></a>
                <a target="blank" href="https://www.instagram.com/?hl=pt-br"><li><img src="imagens/icons/insta.png" width="50px" height="50px"/></li></a>
                <a target="blank" href="https://www.youtube.com/?gl=BR&hl=pt"><li><img src="imagens/icons/yout).png" width="50px" height="50px"/></li></a>
                <a target="blank" href="https://twitter.com/login?lang=pt"><li><img src="imagens/icons/twitter.png" width="50px" height="50px"/></li></a>
                <a target="blank" href="https://mail.google.com/mail/u/0/"><li><img src="imagens/icons/gmail.png" width="50px" height="50px"/></li></a>
              </ul>
          </div>
          <div class="col-lg-4 col-md-6">
            <h3>Links Úteis</h3>
            <div class="media">
              <a href="https://www.google.com/webhp?hl=pt-BR&sa=X&ved=0ahUKEwjCt5iOn-bmAhXOEbkGHdoIBq4QPAgH" class="pull-left">
              <div class="media-body">
                <h4 class="media-heading">Google</h4></a>
              </div>
            </div>
            <div class="media">
              <a href="https://www.google.com.br/maps/preview" class="pull-left">
              <div class="media-body">
                <h4 class="media-heading">Maps</h4></a>
              </div>
            </div>
            <div class="media">
              <a href="https://trello.com/" class="pull-left">
              <div class="media-body">
                <h4 class="media-heading">Trello</h4></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h3>Imagens</h3>
            <img class="img-thumbnail" src="imagens/footer/dah.jpg" width="100px" height="150px" />
            <img class="img-thumbnail" src="imagens/footer/joh.jpg" width="100px" height="150px" />
            <img class="img-thumbnail" src="imagens/footer/marvh.jpg" width="100px" height="150px"/>
          </div>
        </div>
      </div>
      <div class="copyright text-center">
        Copyright &copy; <?php echo date("Y"); ?> <span></span>
      </div>
    </footer>





</html

        
        