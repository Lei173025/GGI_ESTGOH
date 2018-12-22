<?php
class GereHardware{
  private $acesso_base_dados;

  public function __construct($DBH){
     $this->acesso_base_dados = $DBH;
  }

}
?>
