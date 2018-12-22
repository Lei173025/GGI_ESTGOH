<?php
class Software{
  private $software_id;
  private $software_nome;
  private $software_versao;
  private $software_licensas;
  private $software_observacoes;
  private $software_estado;

  public function __construct($id, $nome, $versao, $licensas, $observacoes, $estado){
    $this->software_id = $id;
    $this->software_nome = $nome;
    $this->software_versao = $versao;
    $this->software_licensas = $licensas;
    $this->software_observacoes = $observacoes;
    $this->software_estado = $estado;
  }

  public function getSoftware_nome(): String{
    return $this->software_nome;
  }

  public function setSoftware_nome($software_nome): void{
    $this->software_nome = $software_nome;
  }

  public function getSoftware_versao(): String{
    return $this->software_versao;
  }

  public function setSoftware_versao($software_versao): void{
    $this->software_versao = $software_versao;
  }

  public function getSoftware_licensas(): int{
    return $this->software_licensas;
  }

  public function setSoftware_licensas($software_licensas): void{
    $this->software_licensas = $software_licensas;
  }

  public function getSoftware_observacoes(): String{
    return $this->$software_observacoes;
  }

  public function setSoftware_observacoes($software_observacoes): void{
    $this->software_observacoes = $software_observacoes;
  }

  public function getSoftware_estado(): bool{
    return $this->software_estado;
  }
  public function setSoftware_estado($software_estado): void{
    $this->software_estado = $software_estado;
  }

  public function toString(): String{
    return "Id: " . $this->software_id . " Nome: " .  $this->software_nome . " Versao: " .  $this->software_versao . " Licensas: " .  $this->software_licensas.
    " Observações: " .  $this->software_observacoes . " Estado: " .  $this->software_estado;
  }
}
?>
