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


  <!-- Inseir Conteudo -->
  <div id="page-content-wrapper">
    <div class="container-fluid">

      <h1><?php print($lang_MaisGabineteInformatica);?></h1>
      <br>
      <h3><?php print($lang_Configuracoes);?></h3>
      <br>
      <br>
      <form>
        <div class="container ">
          <div class="row">

            <div class="col-12">
              <div class="form-group row">
                <label for="inputRedeWireless" class="col-sm-2 col-form-label"><?php print($lang_RedeWireless);?></label>
                <div class="col-sm-10">
                </div>
              </div>

              <div class="col-8">
              <div class="detalhes-usr-img">
                Windows:&nbsp
                <a href="https://websrv2.estgoh.ipc.pt/portal2/assets/gabinete-de-informatica/ESTGOH-Win8.1-Configuracao-SSID-eduroam.pdf"><img src="..\Imgs\Pdf.png" width="40" height="40"  alt=""></a>&nbsp
                Android:&nbsp
                <a href="https://websrv2.estgoh.ipc.pt/portal2/assets/gabinete-de-informatica/Configurao-eduroam-android.pdf"><img src="..\Imgs\Pdf.png" width="40" height="40"  alt=""></a>&nbsp
              </div>
            </div>

              <div class="form-group row">
                <label for="inputImpressoras" class="col-sm-2 col-form-label"><?php print($lang_Impressoras);?></label>
                <div class="col-sm-10">
                </div>
              </div>

              <div class="col-8">
              <div class="detalhes-usr-img">
                <?php print($lang_Configurar);?>&nbsp
                <a href="https://websrv2.estgoh.ipc.pt/portal2/assets/gabinete-de-informatica/INSTALAO-DA-IMPRESSORA-NET.pdf"><img src="..\Imgs\Pdf.png" width="40" height="40"  alt=""></a>&nbsp<a href="https://websrv2.estgoh.ipc.pt/portal2/gabinete-inform-tica/configura-es/impressoras/"><b><?php print($lang_MaisInformacao)?></b></a>

              </div>
            </div>

              <div class="form-group row">
                <label for="inputProxyB-on" class="col-sm-2 col-form-label"><?php print($lang_ProxyB_on);?></label>
                <div class="col-sm-10">
                </div>
              </div>

              <div class="col-8">
              <div class="detalhes-usr-img">
                <?php print($lang_Configurar);?>&nbsp
                <a href="https://websrv2.estgoh.ipc.pt/portal2/assets/gabinete-de-informatica/Configurao-Proxy-B-on-ESTGOH.pdf"><img src="..\Imgs\Pdf.png" width="40" height="40"  alt=""></a>&nbsp
              </div>
            </div>
            </div>
          </div>
        </div>
      </form>
  <div class="container footer ">

        <p class="copyright text-muted small"><?php print($lang_Copyright);?> &copy;<?php print($lang_GestordoGabinetedeInformatica2018TodosDireitosReservados);?></p>
      </div>


  </div>


</div>

</body>
</html>
