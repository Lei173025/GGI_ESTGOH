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
  <div id="page-content-wrapper">
    <div class="container-fluid">

      <h1><?php print($lang_GerirContas);?></h1>
      <button class="btn btn-primary butao-procurar" type="submit"><?php print($lang_Procurar);?></button>
      <input class="form-control input-procurar" type="search" placeholder="Keyword " aria-label="Search">

      <br>
      <br>
      <table class="table table-hover table-responsive-lg">
        <thead class="thead blue-table-head">
          <tr>
            <th scope="col" class="cor-white">ID <a href="#"><img src="../Imgs/Seta_Cima.png" height="15px" width="15px"/></a></th>
            <th scope="col" class="cor-white">Email <a href="#"><img src="../Imgs/Seta_Baixo.png" height="15px" width="15px"/></a></th>
            <th scope="col" class="cor-white"><?php print($lang_Tipo);?> <a href="#"><img src="../Imgs/Reta.png" height="15px" width="15px"/></a></th>
            <th scope="col" class="cor-white"><?php print($lang_Gestor);?> </th>
            <th scope="col" class="cor-white"><?php print($lang_Estado);?> </th>
          </tr>
        </thead>
        <tbody>
            <?php
            $cont=1;
           $gu= new GereUtilizadores($DBH);
           foreach ($gt->listar_users() as $value) {
            print ("<tr>");;
            print("<th scope='row'>".print($cont)."</th>");
            $cont++;
            print("<td>".$value["USER_EMAIL"]."</td>");
            print("<td>".$value["USER_TIPO"]."</td>");
            if($value["USER_TIPO"]==TRUE){
            print("<td class='row-tabelas'><a href='GereContas.php'><img src='../Img/Off.png' height="50px" width="50px"/></a> </td>");//Alterar para Ajax está a atualizar a pagina toda + Ação para modar de estado
            }else{
            print("<td class='row-tabelas'><a href='GereContas.php'><img src=''../Imgs/On.png' height="50px" width="50px"/></a> </td>");//Alterar para Ajax está a atualizar a pagina toda + Ação para modar de estado
            }
            if($value["USER_ESTADO"]==TRUE){
            print("<td class='row-tabelas'><a href='GereContas.php'><img src='../Img/Off.png' height="50px" width="50px"/></a> </td>");//Alterar para Ajax está a atualizar a pagina toda + Ação para modar de estado
            }else{
            print("<td class='row-tabelas'><a href='GereContas.php'><img src=''../Imgs/On.png' height="50px" width="50px"/></a> </td>");//Alterar para Ajax está a atualizar a pagina toda + Ação para modar de estado
            }
            print("</tr>");
            }
              ?>
        </tbody>
      </table>
    </div>
      <div class="container footer">
        <p class="copyright text-muted small"><?php print($lang_Copyright);?> &copy;<?php print($lang_GestordoGabinetedeInformatica2018TodosDireitosReservados);?></p>
      </div>

  </div>


</div>

</body>
</html>
