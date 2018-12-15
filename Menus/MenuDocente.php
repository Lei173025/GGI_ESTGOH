<?php

$menuAluno="<div id='wrapper' class='toggled'>

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
      <a data-toggle='collapse' href='#multiCollapseExample2' aria-expanded='false' aria-controls='multiCollapseExample2'>".$lang_FazerPedido."</a>
      <ul class='submenu collapse multi-collapse' id='multiCollapseExample2'>
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
            <a href='../Pedidos/InstalacaoSoftware.php'>".$lang_InstalacaoSoftwareSala."</a>
          </li>
          <li>
            <a href='../Pedidos/InstalacaoHardware.php'>".$lang_InstalacaoHardwareSala."</a>
          </li>
          <li>
            <a href='../Pedidos/EquipamentoNovo.php'>".$lang_AdquirirEquipamento."</a>
          </li>
          <li>
            <a href='../Pedidos/Geral.php'>".$lang_Geral."</a>
          </li>
        </ul>
      </li>
      <li>
      <li>
        <a data-toggle='collapse' href='#multiCollapseExample3' aria-expanded='false' aria-controls='multiCollapseExample3'>".$lang_ListarPedidos."</a>
        <ul class='submenu collapse multi-collapse' id='multiCollapseExample3'>
          <li>
            <a href='../Pedidos/PedidosAtivos.php'>".$lang_PedidosAtivos."</a>
          </li>
         <li>
            <a href='../Pedidos/HistoricoAD.php'>".$lang_Historico."</a>
          </li>
        </ul>
      </li>
      <li>
        <a href='../Pedidos/GereConta.php'>".$lang_GerirConta."</a>
        <a href='../Utilizadores/GereConta.php'>".$lang_GerirConta."</a>
      </li>
      <li>
      <a href='../Pedidos/GabineteInformatica.php'>".$lang_GabineteInformatica."</a>
      <a href='../Utilizadores/GabineteInformatica.php'>".$lang_GabineteInformatica."</a>
    </li>
    <li class='Bandeiras-menu'>
        <img src='../Imgs/pt_pt.png'>
        <img src='../Imgs/en_uk.png'>
      </li>
    </ul>
    </div>
    </div>";

?>
