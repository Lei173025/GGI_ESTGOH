<?php
class BaseDados{

  private $host = "localhost";
  private $dbname = "ggi";
  private $user = "root";
  private $pass = "root";
  public $DBH=null;// database handler

  public function __construct(){
    $this->ligar_bd();

  }
  public function ligar_bd(){
    try{
      $this->DBH=new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->pass);
      $this->DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function desligar_bd(){
    $this->DBH=null;
  }
}

 ?>
