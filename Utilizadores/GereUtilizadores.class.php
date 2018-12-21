<?php
class GereUtilizadores{
  private $utilizadores;
  private $acesso_base_dados;

public function __construct($DBH){
   $this->acesso_base_dados = $DBH;
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
/*
* Método que faz uma query à base de dados para procurar um utilizador por mail
*
* Devolve objeto do tipo Utilizador caso exista, caso contrário devolve null
*
*/
public function get_user($email){
  $STH = $this->acesso_base_dados->prepare('SELECT * FROM USERS WHERE USER_EMAIL = "'.$email.'"');
  $STH->execute();
  $STH->setFetchMode(PDO::FETCH_ASSOC);
  $user = null;
  if($row = $STH->fetch()){
    $gestor= false;
    if($row["USER_GESTOR"]==1) $gestor = true;
    $estado= false;
    if($row["USER_ESTADO"]) $estado = true;
    $user = new Utilizador($row["USER_ID"],$row["USER_NOME"],$row["USER_EMAIL"],$row["USER_TIPO"],$gestor, $estado);
    $user->setUser_imagem($row["USER_IMAGEM"]);
  }
  return $user;
}

/*
* Método que edita um utilizador
*
* Devolve String com o sucesso do método
*
*/
public function edita_user(Utilizador $user){

  // verificação da existencia do utilizador
  if($user== null) return "Este utilizador não existe!";
  $utilizador_antigo = $this->get_user($user->getUser_email());
  if($utilizador_antigo==null) return "Este utilizador não existe!";

  //verificação se existe no minimo 1 gestor
  if(($user->getUser_gestor() == false && $utilizador_antigo->getUser_gestor() == true) || ($user->getUser_ESTADO() == false && $utilizador_antigo->getUser_ESTADO() == true)){
    $STH = $this->acesso_base_dados->prepare("SELECT count(*) FROM USERS WHERE USER_GESTOR = 1 AND USER_ESTADO = 1");
    $STH->execute();
    $STH->setFetchMode(PDO::FETCH_ASSOC);
    if(!isset($row[0]) || $row[0]<=1) return "A aplicação necessita no minimo 1 gestor!";
  }

  // Depois das verificações update realizado
  try{
    $email = $user->getUser_email();
    $STH = $this->acesso_base_dados->prepare('UPDATE USERS SET USER_NOME = ?,USER_IMAGEM = ?,USER_GESTOR = ?,USER_ESTADO = ?  WHERE USER_EMAIL = "'.$email.'"');
    $gestor= 0;
    if($user->getUser_GESTOR()) $gestor = 1;
    $estado= 0;
    if($user->getUser_ESTADO()) $estado = 1;
    $nome= $user->getUser_nome();
    $STH->bindParam(1, $nome);
    $imagem=$user->getUser_imagem();
    $STH->bindParam(2, $imagem);
    $STH->bindParam(3, $gestor);
    $STH->bindParam(4, $estado);
    $STH->execute();
    return "Editado com SUCESSO!";
  }catch(Exception $e){
        return "Não foi possível editar a/o foto/nome/estado/gestor";
  }
}
}

?>
