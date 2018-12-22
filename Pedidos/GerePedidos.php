<?php
class GerePedidos{
  private $pedidos;
  private $acesso_base_dados;

public function __construct($DBH){
   $this->acesso_base_dados = $DBH;
}

public function insere_pedido(Pedidos $pedido): String{
  $STH = $this->DBH->prepare("INSERT INTO PEDIDOS(PEDIDOS_TIPO,PEDIDOS_DATA_REALIZACAO,PEDIDOS_DATA_ACEITACAO,PEDIDOS_DATA_FINALIZACAO,PEDIDOS_ESTADO,PEDIDOS_PRIORIDADE,PEDIDOS_OBSERVACOES,PEDIDOS_PISO,PEDIDOS_DIVISAO) values(?,?,?,?,?,?,?,?,?)");
  if(!$STH->execute(array($pedidos->getPedido_tipo(),$pedidos->getPedido_data_realizada(),$pedidos->getPedido_data(),$pedidos->getPedido_data_finalizacao(),$pedidos->getPedido_estado(),$pedidos->getPedido_prioridade(),$pedidos->getPedido_observacoes(),$pedidos->getPedido_piso(),$pedidos->getPedido_divisao()))){
    return 0;
    exit;
  }
  return 1;
}

public function edita_pedido(Pedidos $pedido){

  // verificação da existencia do pedido
  if($pedido== null) return "Este pedido não existe!";
  $pedido_antigo = $this->get_pedido($pedido->getPedido_id());
  if($pedido_antigo==null) return "Este utilizador não existe!";

  // Depois das verificações update realizado
  try{
    $id = $pedido->getPedido_id();
    $STH = $this->acesso_base_dados->prepare('UPDATE PEDIDOS SET PEDIDOS_TIPO = ?,PEDIDOS_ESTADO = ?,PEDIDOS_PRIORIDADE = ?,PEDIDOS_OBSERVACOES = ?,PEDIDOS_PISO = ?,PEDIDOS_DIVISAO = ?  WHERE PEDIDO_ID = "'.$id.'"');
    $estado= 0;
    if($pedido->getPedido_ESTADO()) $estado = 1;
    $tipo= $pedido->getPedido_tipo();
    $STH->bindParam(1, $tipo);
    $STH->bindParam(2, $estado);
    $prioridade=$pedido->getPedido_prioridade();
    $STH->bindParam(3, $prioridade);
    $observacoes=$pedido->getPedido_observacoes();
    $STH->bindParam(4, $observacoes);
    $piso=$pedido->getPedido_piso();
    $STH->bindParam(5, $piso);
    $divisao=$pedido->getPedido_divisao();
    $STH->bindParam(6, $divisao);
    $STH->execute();
    return "Editado com SUCESSO!";
  }catch(Exception $e){
        return "Não foi possível editar";
  }
}
/*
* Método que faz uma query à base de dados para procurar um pedido por id
*
* Devolve objeto do tipo pedido caso exista, caso contrário devolve null
*
*/
public function get_pedido($id){
  $STH = $this->acesso_base_dados->prepare('SELECT * FROM PEDIDOS WHERE PEDIDOS_ID = "'.$id.'"');
  $STH->execute();
  $STH->setFetchMode(PDO::FETCH_ASSOC);
  $pedido = null;
  if($row = $STH->fetch()){
    if($row["PEDIDOS_ESTADO"]) $estado = true;
    $pedido = new Pedido $row["PEDIDOS_ID"],$row["PEDIDOS_TIPO"],$row["PEDIDOS_PRIORIDADE"],$row["PEDIDOS_OBSERVACOES"],$row["PEDIDOS_PISO"],$row["PEDIDOS_DIVISAO"],$estado);
  }
  return $pedido;
}

/*
listar pedido_ad
listar pedido_gestor
enviar_mensagens
*/

}
