<?php
class Hardware{
private $hardware_id;
private $hardware_marca;
private $hardware_modelo;
private $hardware_codigo;
private $hardware_piso;
private $hardware_divisao;
private $hardware_armario;
private $hardware_cpu;
private $hardware_ram;
private $hardware_disco;
private $hardware_grafica;
private $hardware_observacoes;
private $hardware_estado;
private $hardware_lista_software;

public function __construct(int $id, String $marca, String $modelo, String $codigo, int $piso, String $divisao, String $armario, String $cpu, String $ram, String $disco, String $grafica, String $observacoes, bool $estado, array $lista_software){
  $this->hardware_id = $id;
  $this->hardware_marca = $marca;
  $this->hardware_modelo = $modelo;
  $this->hardware_codigo = $codigo;
  $this->hardware_piso = $piso;
  $this->hardware_divisao = $divisao;
  $this->hardware_armario = $armario;
  $this->hardware_cpu = $cpu;
  $this->hardware_ram = $ram;
  $this->hardware_disco = $disco;
  $this->hardware_grafica = $grafica;
  $this->hardware_observacoes = $observacoes;
  $this->hardware_estado = $estado;
  $this->hardware_lista_software = $software;
}

public function getHardware_Id(): int{
    return $this->hardware_id;
}
public function setHardware_Id(int $hardware_id): void{
  $this->hardware_id = $hardware_id;
}
public function getHardware_marca(): String{
  return $this->hardware_marca;
}
public function setHardware_marca(String $hardware_marca): void{
  $this->hardware_marca = $hardware_marca;
}
public function getHardware_modelo(): String{
  return $this->hardware_modelo;
}
public function setHardware_modelo(String $hardware_modelo): void{
  $this->hardware_modelo = $hardware_modelo;
}
public function getHardware_codigo(): String{
  return $this->hardware_codigo;
}
public function setHardware_codigo(String $hardware_codigo): void{
  $this->hardware_codigo = $hardware_codigo;
}
public function getHardware_piso(): int{
  return $this->hardware_piso;
}
public function setHardware_piso(int $hardware_piso): void{
  $this->hardware_piso = $hardware_piso;
}
public function getHardware_divisao(): String{
  return $this->hardware_divisao;
}
public function setHardware_divisao(String $hardware_divisao): void{
  $this->hardware_divisao = $hardware_divisao;
}
public function getHardware_armario(): String{
  return $this->hardware_armario;
}
public function setHardware_armario(String $hardware_armario): void{
  $this->hardware_armario = $hardware_armario;
}
public function getHardware_cpu(): String{
  return $this->hardware_cpu;
}
public function setHardware_cpu(String $hardware_cpu): void{
  $this->hardware_cpu = $hardware_cpu;
}
public function getHardware_ram(): String{
  return $this->$hardware_ram;
}
public function setHardware_ram(String $hardware_ram): void{
  $this->hardware_ram = $hardware_ram;
}
public function getHardware_estado(): bool{
  return $this->hardwareestado;
}
public function setHardware_estado(bool $hardware_estado): void{
  $this->hardware_estado = $hardware_estado;
}
public function getHardware_observacoes(): String{
  return $this->$hardware_observacoes;
}
public function setHardware_observacoes(String $hardware_observacoes): void{
  $this->hardware_observacoes = $hardware_observacoes;
}
public function getHardware_grafica(): String{
  return $this->$hardware_grafica;
}
public function setHardware_grafica(String $hardware_grafica): void{
  $this->hardware_grafica = $hardware_grafica;
}
public function getHardware_lista_software(): array{
  return $this->$hardware_lista_software;
}
public function setHardware_lista_software(array $hardware_lista_software): void{
  $this->hardware_lista_software = $hardware_lista_software;
}
public function toString(): String{
  return "Id: " . $this->hardware_id . " Marca: " .  $this->hardware_marca . " Modelo: " .  $this->hardware_modelo . " Codigo: " .  $this->hardware_codigo.
  " Piso: " .  $this->hardware_piso . " Divisão: " .  $this->hardware_divisao . " Armario: " .  $this->hardware_armario . " CPU: " .  $this->hardware_cpu .
  " Ram: " .  $this->hardware_ram . " Disco: " . $this->hardware_disco . " Gráfica: " .  $this->hardware_grafica . " Observações: " .  $this->hardware_observacoes .
  " Estado: " .  $this->hardware_estado . " Lista de Software: " .  $this->hardware_lista_software;
}
}
?>
