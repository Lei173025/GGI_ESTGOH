<?php
session_start();
set_include_path('Utilizador.class.php');
set_include_path('GereUtilizador.class.php');
set_include_path('../Menus/MenuAluno.php');
set_include_path('../Menus/MenuDocente.php');
set_include_path('../Menus/MenuGestor.php');
?>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../Imgs/LogoBranco.png">

  <title>G.G.I.</title>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <link href="../CSS/Bootstrap.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="../CSS/Bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->

  <link href="../CSS/Simple-sidebar.css" rel="stylesheet">

  <link href="../CSS/Estilos.css" rel="stylesheet"> <!-- folha de estilo personalizada -->


</head>

<body>




    <div id="wrapper" class="toggled">

      <!-- Menu lateral -->
      <?php
        print($menuAluno);
       ?>

       <!-- Menu superior -->

       <nav class="navbar navbar-expand-lg navbar-dark bg-primary gradiente-topo">
         <img src="../Imgs/LogoBranco.png" width="40" height="40" class="d-inline-block align-top" alt="">
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item ">
             <a class="nav-link" href="Index.php"><?php print($lang_GestorGabineteInformatica);?></a>
           </li>
         </ul>
         <form class="form-inline mt-2 mt-md-0">
           <a href="../Index.php" class="btn btn-outline-light"><?php print($lang_TerminarSessao);?></a>
         </form>
       </div>
     </nav>


  <!-- Página Inicial -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container ">
      <h1 class="display-4"><?php print($lang_BemVindo." ". $_SESSION['USER_NOME'])?></h1>
      <p class="lead"><?php print($lang_Estaeanossapaginaprincipal)?> </p>
    </div>
  </div>

  <div class="container ">
    <div class="row">
      <div class="col-sm-12">
        <h3><?php print($lang_Descricao)?></h3>
        <p><?php print($lang_TextoPaginaPrincipal)?><p>
  <!--  <p>Esta página serve para ajudar o Gabinete de Informática da ESTGOH a gerir de forma mais fácil, rápida</p>
        <p>e eficaz os encargos do gabinete. Desta forma também fica mais fácil para o aluno e para os docentes</p>
        <p>resolver problemas ou fazer pedidos. Nesta plataforma o Gestor poderá tratar dos pedidos que lhe são</p>
        <p>feitos pelos alunos e pelos docentes.</p> -->
      </div>
    </div>
  </div>

<footer class="footer">
  <div class="container ">
    <p class="copyright text-muted small"><?php print($lang_Copyright);?> &copy;<?php print($lang_GestordoGabinetedeInformatica2018TodosDireitosReservados);?></p>
  </div>



</body>
</html>
