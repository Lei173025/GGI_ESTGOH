<?php
class Mensagem{
  private $mensagem_id;
  private $mensagem_id_pedido;
  private $mensagem_user;
  private $mensagem_mensagem;
  private $mensagem_data;

  public function __construct($id, $pedido, $user, $mensagem, $data){
     $this->mensagem_id=$id;
     $this->mensagem_id_pedido=$pedido;
     $this->mensagem_user=$user;
     $this->mensagem_mensagem=$mensagem;
     $this->mensagem_data=$data;
  }

  public function to_String(){
    return " Id: " . $mensagem_id . " Id do Pedido: " . $mensagem_id_pedido . " Utilizador: " .
    $mensagem_user . " Mensagem: " . $mensagem_mensagem . " Data: " . $mensagem_data;
  }
  
}
?>
