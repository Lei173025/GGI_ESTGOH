<?php
class Pedido{
  private $id;
  private $user;
  private $tipo;
  private $data_realizacao;
  private $data_aceitacao;
  private $data_finalizacao;
  private $estado;
  private $prioridade;
  private $observacoes;
  private $piso;
  private $divisao;
  private $hardware;
  private $software;
  private $lista_mensagens;

public function __construct($id, $user, $tipo, $data_realizacao, $data_aceitacao, $data_finalizacao, $estado, $prioridade, $observacoes, $piso, $divisao, $hardware, $software, $lista_mensagens){
   $this->id=$id;
   $this->user=$user;
   $this->tipo=$tipo;
   $this->data_realizacao=$data_realizacao;
   $this->data_aceitacao=$data_aceitacao;
   $this->data_finalizacao=$data_finalizacao;
   $this->estado=$estado;
   $this->prioridade=$prioridade;
   $this->observacoes=$observacoes;
   $this->piso=$piso;
   $this->divisao=$divisao;
   $this->hardware=$hardware;
   $this->software=$software;
   $this->lista_mensagens=$lista_mensagens;
}

public function getPedido_user(): int{
  return $this->user;
}

public function setPedido_user($user): void{
  $this->user=$user;
}

public function getPedido_tipo(): int{
  return $this->tipo;
}

}
?>
