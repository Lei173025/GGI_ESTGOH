<?php
class GereUtilizadores{
  private $utilizadores;
  private $acesso_base_dados;

public function __construct(BaseDados $DBH){
   $this->$acesso_base_dados = $DBH;
}

public function insere_user(Utilizador $user): int{
  $STH = $this->DBH->prepare("INSERT INTO UTILIZADOR(USER_NOME,USER_EMAIL,USER_IMAGEM,USER_TIPO,USER_GESTOR,USER_ESTADO) values(?,?,?,?,?,?)");
  if(!$STH->execute(array($user->getUser_nome(),$user->getUser_email(),$user->getUser_imagem(),$user->getUser_tipo(),$user->getUser_gestor(),$user->getUser_estado()))){
    return 0;
    exit;
  }
  return 1;
}

public function listar_users(){
  $STH = $this->DBH->prepare("SELECT * FROM USERS WHERE USER_ESTADO = 'TRUE'");
  $STH->execute();
  $STH->setFetchMode(PDO::FETCH_ASSOC);
  $this->utilizadores = array();
  while($row = $STH->fetch()){
    array_push($this->utilizadores,new Utilizador($row["USER_NOME"],$row["USER_EMAIL"],$row["USER_IMAGEM"],$row["USER_TIPO"],$row["USER_GESTOR"],$row["USER_ESTADO"]));
  }
  return $this->utilizadores;
}



?>
