<?php
class Utilizador{
private $user_id;
private $user_nome;
private $user_email;
private $user_imagem;
private $user_tipo;
private $user_gestor;
private $user_estado;

/*
* Método que cria um objeto do tipo Utilizador com os atributos recebidos
* @param id - id do utilizador, nome - nome do utilizador, email - email do utilizador tipo - tipo da conta do utilizador, gestor - indicador de privilégios de gestor(sim/não),estado - indicador de estado da conta(ativo/inativo)
*/
public function __construct(int $id,String $nome,String $email,int $tipo,bool $gestor,bool $estado){
  $this->user_id = $id;
  $this->user_nome = $nome;
  $this->user_email = $email;
  $this->user_tipo = $tipo;
  $this->user_gestor = $gestor;
  $this->user_estado = $estado;
}

/*
* Permite aceder ao valor do atributo user_id de um objeto Utilizador
*/
public function getUser_Id(): int{
    return $this->user_id;
}

/*
* Permite atribuir um valor inteiro ao atributo user_id de um objeto Utilizador
*/
public function setUser_Id(int $user_id){
  $this->user_id = $user_id;
}

/*
* Permite aceder ao valor do atributo user_nome de um objeto Utilizador
*/
public function getUser_nome(): String{
  return $this->user_nome;
}

/*
* Permite atribuir um valor(String) ao atributo user_nome de um objeto Utilizador
*/
public function setUser_nome(String $user_nome): void{
  $this->user_nome = $user_nome;
}

/*
* Permite aceder ao valor do atributo user_email de um objeto Utilizador
*/
public function getUser_email(): String{
  return $this->user_email;
}

/*
* Permite atribuir um valor(String) ao atributo user_email de um objeto Utilizador
*/
public function setUser_email(String $user_email): void{
  $this->user_email = $user_email;
}

/*
* Permite aceder ao valor do atributo user_imagem de um objeto Utilizador
*/
public function getUser_imagem(): String{
  return $this->user_imagem;
}

/*
* Permite atribuir um valor(String) ao atributo user_imagem de um objeto Utilizador
*/
public function setUser_imagem(String $user_imagem): void{
  $this->user_imagem = $user_imagem;
}

/*
* Permite aceder ao valor do atributo user_tipo de um objeto Utilizador
*/
public function getUser_tipo(): int{
  return $this->user_tipo;
}

/*
* Permite atribuir um valor(String) ao atributo user_tipo de um objeto Utilizador
*/
public function setUser_tipo(int $user_tipo): void{
  $this->user_tipo = $user_tipo;
}

/*
* Permite aceder ao valor do atributo user_gestor de um objeto Utilizador
*/
public function getUser_gestor(): bool{
  return $this->user_gestor;
}

/*
* Permite atribuir um valor(boolean) ao atributo user_gestor de um objeto Utilizador
*/
public function setUser_gestor(bool $user_gestor): void{
  $this->user_gestor = $user_gestor;
}

/*
* Permite aceder ao valor do atributo user_estado de um objeto Utilizador
*/
public function getUser_estado(): bool{
  return $this->user_estado;
}

/*
* Permite atribuir um valor(boolean) ao atributo user_estado de um objeto Utilizador
*/
public function setUser_estado(bool $user_estado): void{
  $this->user_estado = $user_estado;
}

/*
* Método que devolve uma String com todos os valores de um objeto Utilizador
*/
public function toString(): String{
  return "Id: " . $this->user_id . " Nome: " .  $this->user_nome . " Email: " .  $this->user_email . " Imagem: " .  $this->user_imagem .
  " Tipo: " .  $this->user_tipo . " Gestor: " .  $this->user_gestor . " Estado: " .  $this->user_estado;
}
}


?>
