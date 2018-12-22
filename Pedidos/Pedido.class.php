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

  public function setPedido_user($pedido_user): void{
    $this->user=$pedido_user;
  }

  public function getPedido_tipo(): int{
    return $this->tipo;
  }

  public function setPedido_tipo($pedido_tipo): void{
    $this->tipo=$pedido_tipo;
  }

  public function getPedido_data_realizacao(): LONG int{
    return $this->data_realizacao;
  }

  public function setPedido_data_realizacao($pedido_data_realizacao): void{
    $this->data_realizacao=$pedido_data_realizacao;
  }

  public function getPedido_data_aceitacao(): LONG int{
    return $this->data_aceitacao;
  }

  public function setPedido_data_aceitacao($pedido_data_aceitacao): void{
    $this->data_aceitacao=$pedido_data_aceitacao;
  }

  public function getPedido_data_finalizacao(): LONG int{
    return $this->data_finalizacao;
  }

  public function setPedido_data_aceitacao($pedido_data_finalizacao): void{
    $this->data_finalizacao=$pedido_data_finalizacao;
  }

  public function getPedido_estado(): int{
    return $this->estado;
  }

  public function setPedido_estado($pedido_estado): void{
    $this->estado=$pedido_estado;
  }

  public function getPedido_prioridade(): int{
    return $this->$prioridade;
  }

  public function setPedido_prioridade($pedido_prioridade): void{
    $this->prioridade=$pedido_prioridade;
  }

  public function getPedido_observacoes(): String{
    return $this->observacoes;
  }

  public function setPedido_observacoes($pedido_observacoes): void{
    $this->observacoes=$pedido_observacoes;
  }

  public function getPedido_piso(): int{
    return $this->piso;
  }

  public function setPedido_piso($pedido_piso): void{
    $this->piso=$pedido_piso;
  }

  public function getPedido_divisao(): int{
    return $this->divisao;
  }

  public function setPedido_divisao($pedido_divisao): void{
    $this->divisao=$pedido_divisao;
  }

  public function getPedido_hardware(): int{
    return $this->hardware;
  }

  public function setPedido_hardware($pedido_hardware): void{
    $this->hardware=$pedido_hardware;
  }

  public function getPedido_software(): int{
    return $this->software;
  }

  public function setPedido_software($pedido_software): void{
    $this->software=$pedido_software;
  }

  public function getPedido_lista_mensagens(){
    return $this->lista_mensagens;
  }

  public function setPedido_lista($pedido_lista_mensagens): void{
    $this->lista_mensagens=$pedido_lista_mensagens;
  }

  public function toString(): String{
    $mensagens;
    foreach ($lista_mensagens as $val){
      $mensagens=$mensagens . " - " . $val;
    }
    return "Id: " . $this->user . " Tipo: " .  $this->tipo . " Data de Realizacao: " .  $this->data_realizacao . " Data de Aceitacao: " .  $this->data_aceitacao .
    " Data de Finalizacao: " .  $this->data_finalizacao . " Estado: " .  $this->estado . " Prioridade: " .  $this->prioridade . " Observações: " . $this->observacoes . " Piso: " . $this->piso . " Divisão" .
    $this->divisao . " Hardware: " . $this->hardware . " Software: " . $this->software . " Mensagens: " . $mensagens;
  }
}
?>
