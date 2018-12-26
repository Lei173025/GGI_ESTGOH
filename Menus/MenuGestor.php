<?php


$menuGestor="

  <!-- Menu lateral -->
  <div id='sidebar-wrapper'>
    <ul class='sidebar-nav'>
      <li class='detalhes-usr'>
        <div class='detalhes-usr-div'>
          <div class='detalhes-usr-img'>
            <img src='".$user_imagem."' width='60' height='60'  alt=''>
          </div>
            <p class='nome-sidebar n-e-estilo'>".$user_nome." <br>".$user_email."</p>
        </div>
      </li>
      <li>
        <a data-toggle='collapse' href='#multiCollapseExample1' aria-expanded='false' aria-controls='multiCollapseExample2'>".$lang_Hardware."</a>
            <ul class='submenu collapse multi-collapse' id='multiCollapseExample1'>
              <li>
                <a href='../Hardware/InserirHardware'>".$lang_Inserir."</a>
              </li>
              <li>
                <a href='../Hardware/GerirHardware'>".$lang_Gerir."</a>
              </li>
            </ul>
      </li>
      <li>
        <a data-toggle='collapse' href='#multiCollapseExample2' aria-expanded='false' aria-controls='multiCollapseExample2'>".$lang_Software."</a>
        <ul class='submenu collapse multi-collapse' id='multiCollapseExample2'>
          <li>
            <a href='../Software/InserirSoftware'>".$lang_Inserir."</a>
          </li>
          <li>
            <a href='../Software/InserirSoftware'>".$lang_Gerir."</a>
          </li>
        </ul>
      </li>
      <li>
        <a data-toggle='collapse' href='#multiCollapseExample5' aria-expanded='false' aria-controls='multiCollapseExample2'>>".$lang_FazerPedido."</a>
        <ul class='submenu collapse multi-collapse' id='multiCollapseExample5'>
          <li>
            <a href='../Pedidos/Avaria.php'>".$lang_Avaria."</a>
          </li>
          <li>
            <a href='../Pedidos/RequisicaoSoftware.php'>".$lang_RequisicaoSoftware."</a>
          </li>
          <li>
            <a href='../Pedidos/RequisicaoHardware.php'>".$lang_RequisicaoHardware."</a>
          </li>
          <li>
            <a href='../Pedidos/Geral.php'>".$lang_Geral."</a>
          </li>
        </ul>
      </li>
      <li>
        <a data-toggle='collapse' href='#multiCollapseExample3' aria-expanded='false' aria-controls='multiCollapseExample3'>".$lang_Pedidos."</a>
        <ul class='submenu collapse multi-collapse' id='multiCollapseExample3'>
          <li>
            <a href='../Pedidos/PedidosNovos.php'>".$lang_Novos." &nbsp&nbsp&nbsp&nbsp<img src='..\Imgs\6.png' width='15' height='15'  alt=''></a>
          </li>
          <li>
            <a href='../Pedidos/PedidosProcessamento.php'>".$lang_PedidosProcesamento."</a>
          </li>
          <li>
            <a href='../Pedidos/HistoricoG.php'>".$lang_Historico."</a>
          </li>
        </ul>
      </li>
      <li>
        <a href='../Pedidos/AgendamentoManutencaoSala.php'>".$lang_AgendarManutencao."</a>
      </li>
      <li>
        <a href='../Utilizadores/GereContas.php'>".$lang_GerirContas."</a>
      </li>
      <li>
        <a href='../Utilizadores/GereConta.php'>".$lang_GerirConta."</a>
      </li>
      <li>
        <a href='../Estatisticas/VerEstatisticas.php'>".$lang_Estatisticas."</a>
      </li>
      <li>
        <a href='../Utilizadores/GabineteInformatica.php'>".$lang_GabineteInformatica."</a>
      </li>
      <li class='Bandeiras-menu'>
        <img src='../Imgs/pt_pt.png'>
        <img src='../Imgs/en_uk.png'>
      </li>
    </ul>
  </div>";
?>
