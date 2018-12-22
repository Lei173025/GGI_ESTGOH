<?php
session_start();
class GereUtilizadores{
  private $acesso_base_dados;


  public function __construct($DBH){
    $this->acesso_base_dados = $DBH;
  }

  /*
  * Método que faz a autenticação de um utilizador na aplicação verificando a sua existencia na base de dados da
  * aplicação, caso contrário adiciona o mesmo à base de dados da aplicação.
  *
  * Devolve o utilizador caso a autenticação seja efetuada com sucesso, caso contrário devolve null
  */
  public function autenticacao($email, $password){

    $array_email=explode("@",$email);
    $username=$array_email[0];

    //verificação da existência do utilizador na base de dados da aplicação
    $user = $this->get_user($email);
    if($user==null){
      $ldap_con = ldap_connect("192.168.135.1") or die("Could not connect to ESTGOH!");
      ldap_set_option($ldap_con, LDAP_OPT_NETWORK_TIMEOUT, 2); /* 2 segundos timeout */
      ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
      ldap_set_option($ldap_con, LDAP_OPT_REFERRALS, 0);
      $ldap_bind = @ldap_bind($ldap_con,"ou=Users,dc=estgoh,dc=ipc.pt",$password);
      if($ldap_bind) {
        $filter = "(ui=$username)";
        $result = ldap_search($ldap_con,"ou=Users,dc=estgoh,dc=ipc.pt",$filter) or exit("Unable to search");
        $entries = ldap_get_entries($ldap_con, $result);

        //este print analisa os dados obtidos pela busca para mudermos criar um objeto user e inserir na base de dados da aplicação
        /*print "<pre>";
        print_r ($entries);
        print "</pre>";
        echo "sucesso";*/
        //entries é um array com toda a informação sobre este utilizador no servidor LDAP

        //temporário pois não conseguimos acesso ao servidor ldap da escola devivo a não nos entregarem as credenciais
        $utilizador = new Utilizador();
        $this->insere_user($utilizador);

      } else {
        return null;
      }

    }

    //verificação das credenciais via LDAP
    $ldap = ldap_connect("192.168.135.1");
    // suposto endereço do servidor mas só permito acesso se estiver instalado no servidor da escola
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
    $bind = @ldap_bind($ldap, 'uid='.$username.',ou=Users,dc=estgoh,dc=ipc.pt', $password);
    if ($bind) {
      $user_logado = $this->get_user($email);
      $_SESSION['USER_ID']= $user_logado->getUser_Id();
      $_SESSION['USER_NOME']= $user_logado->getUser_nome();
      $_SESSION['USER_EMAIL']= $user_logado->getUser_email();
      $_SESSION['USER_IMAGEM']= $user_logado->getUser_imagem();
      $_SESSION['USER_TIPO']= $user_logado->getUser_tipo();
      $_SESSION['USER_GESTOR']= $user_logado->getUser_gestor();
      $_SESSION['USER_ESTADO']= $user_logado->getUser_estado();
      if($user_logado->getUser_estado()) return null;
      return $user_logado;
    }
    else return null;

  }

  /*
  * Método que faz o logout da aplicação destuindo a mesma
  */
  public function logout(){
    session_destroy();
    unset($_SESSION['USER_ID']);
    unset($_SESSION['USER_NOME']);
    unset($_SESSION['USER_EMAIL']);
    unset($_SESSION['USER_IMAGEM']);
    unset($_SESSION['USER_TIPO']);
    unset($_SESSION['USER_GESTOR']);
    unset($_SESSION['USER_ESTADO']);
  }
  /*
  * Construtor da classe Gere_Utilizadores, cria um objeto Gere_Utilizadores com uma ligaçõa à base de dados local
  *
  */
  public function __construct($DBH){
    $this->acesso_base_dados = $DBH;
  }
  /*
  * Método que insere o objeto Utilizador recebido na base de dados local, caso tenha verificado que não existe esse utilizador na base de dados
  * Devolve 1 se inserido com Sucesso, 0 com Insucesso
  */
  public function insere_user(Utilizador $user): int{

    $verificacao= $this->get_user($user->getUser_email());
    if($verificação!=null) return 0;
    $STH = $this->acesso_base_dados->prepare("INSERT INTO UTILIZADOR(USER_NOME,USER_EMAIL,USER_IMAGEM,USER_TIPO,USER_GESTOR,USER_ESTADO) values(?,?,?,?,?,?)");
    if(!$STH->execute(array($user->getUser_nome(),$user->getUser_email(),$user->getUser_imagem(),$user->getUser_tipo(),$user->getUser_gestor(),$user->getUser_estado()))){
      return 1;
      exit;
    }
    else {
      return 0;
    }
  }
  /*
  * Método que obtém a lista de todos os utilizadores ativos na base de dados local
  *
  * Devolve a lista de utilizadores ativos em forma de array
  *
  */
  public function listar_users(){
    $STH = $this->DBH->prepare("SELECT * FROM USERS WHERE USER_ESTADO = 'TRUE'");
    $STH->execute();
    $STH->setFetchMode(PDO::FETCH_ASSOC);
    $this->utilizadores = array();
    while($row = $STH->fetch()){
      array_push($this->utilizadores,new Utilizador($row["USER_NOME"],$row["USER_EMAIL"],$row["USER_IMAGEM"],$row["USER_TIPO"],$row["USER_GESTOR"],$row["USER_ESTADO"]));

    }
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
