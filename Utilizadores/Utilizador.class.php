<?php
class Utilizador{
private $user_id;
private $user_nome;
private $user_email;
private $user_imagem;
private $user_tipo;
private $user_gestor;
private $user_estado;

public function __construct(int $id,String $nome,String $email,int $tipo,bool $gestor,bool $estado){
  $this->user_id = $id;
  $this->user_nome = $nome;
  $this->user_email = $email;
  $this->user_tipo = $tipo;
  $this->user_gestor = $gestor;
  $this->user_estado = $estado;
}


public function getUser_Id(): int{
    return $this->user_id;
}
public function setUser_Id(int $user_id){
  $this->user_id = $user_id;
}
public function getUser_nome(): String{
  return $this->user_nome;
}
public function setUser_nome(String $user_nome): void{
  $this->user_nome = $user_nome;
}
public function getUser_email(): String{
  return $this->user_email;
}
public function setUser_email(String $user_email): void{
  $this->user_email = $user_email;
}
public function getUser_imagem(): String{
  return $this->user_imagem;
}
public function setUser_imagem(String $user_imagem): void{
  $this->user_imagem = $user_imagem;
}
public function getUser_tipo(): int{
  return $this->user_tipo;
}
public function setUser_tipo(int $user_tipo): void{
  $this->user_tipo = $user_tipo;
}
public function getUser_gestor(): bool{
  return $this->user_gestor;
}
public function setUser_gestor(bool $user_gestor): void{
  $this->user_gestor = $user_gestor;
}
public function getUser_estado(): bool{
  return $this->user_estado;
}
public function setUser_estado(bool $user_estado): void{
  $this->user_estado = $user_estado;
}
public function toString(): String{
  return "Id: " . $this->user_id . " Nome: " .  $this->user_nome . " Email: " .  $this->user_email . " Imagem: " .  $this->user_imagem .
  " Tipo: " .  $this->user_tipo . " Gestor: " .  $this->user_gestor . " Estado: " .  $this->user_estado;
}
}


?>
