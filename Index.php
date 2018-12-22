
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Imgs//logo_branco.png">

    <title>G.G.I.</title>


    <link href="CSS/Bootstrap.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="CSS/Bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/Signin.css" rel="stylesheet">

    <link href="CSS/Estilos.css" rel="stylesheet">

  </head>

  <body class="text-center">
    <header>
      <!-- Fixed navbar -->

      <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top gradiente-topo">
        <img src="Imgs/LogoBranco.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="Pagina_Inicial.html"> <?php print($lang_GestorGabineteInformatica);?></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <img src="Imgs/pt_pt.png" width="50" height="30" class="d-inline-block align-top" alt="">
            <p class="letras-invisiveis">&nbsp</p>
            <img src="Imgs/en_uk.png" width="50" height="30" class="d-inline-block align-top" alt="">
          </form>
        </div>
      </nav>
    </header>

    <form class="form-signin" method="GET">
      <img src="Imgs/LogoTransparente.png" width="100" height="100" class="d-inline-block align-top" alt="">
      <h1 class="h3 mb-3 font-weight-normal"> <?php print($lang_GestorGabineteInformatica);?></h1>
      <br>
      <label for="inputEmail" class="sr-only"> <?php print($lang_Email);?></label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only"> <?php print($lang_Password);?></label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <br>
      <button class="btn btn-lg btn btn-primary btn-block " type="submit"> <?php print($lang_Entrar);?></button>
      <br>


        <div class="container ">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="corfooter" href="http://websrv2.estgoh.ipc.pt/portal2/">Estgoh</a>
            </li>
            <li class="footer-menu-divider list-inline-item divAzul">&sdot;</li>
            <li class="list-inline-item">
              <a class="corfooter" href="https://mailsecure.estgoh.ipc.pt/horde/imp/login.php"><?php print($lang_Email);?></a>
            </li>
            <li class="footer-menu-divider list-inline-item divAzul">&sdot;</li>
            <li class="list-inline-item">
              <a class="corfooter" href="http://elearning.estgoh.ipc.pt/">E-learning</a>
            </li>
            <li class="footer-menu-divider list-inline-item divAzul">&sdot;</li>
            <li class="list-inline-item">
              <a class="corfooter" href="http://biblio.estgoh.ipc.pt/"><?php print($lang_Biblioteca);?></a>
            </li>
            <li class="footer-menu-divider list-inline-item divAzul">&sdot;</li>
            <li class="list-inline-item">
              <a class="corfooter" href="http://netpa.estgoh.ipc.pt/netpa/page">NetPA(Portal Académico)</a>
            </li>
            <li class="footer-menu-divider list-inline-item ">&sdot;</li>
          </ul>
          <p class="copyright text-muted small"><?php print($lang_Copyright);?> &copy;<?php print($lang_GestordoGabinetedeInformatica2018TodosDireitosReservados);?></p>
        </div>



    </form>

  </body>
</html>

<?php


 ?>
