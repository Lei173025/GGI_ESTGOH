<?php
class Estatisticas{
private $estatisticas_pedidos_sucesso;
private $estatisticas_pedidos_nao_concluidos;
private $estatisticas_pedidos_totais;

public function __construct(int $pedidos_sucesso, int $pedidos_nao_concluidos, int $pedidos_totais){
  $this->estatisticas_pedidos_sucesso = $pedidos_sucesso;
  $this->estatisticas_pedidos_nao_concluidos = $pedidos_nao_concluidos;
  $this->estatisticas_pedidos_totais = $pedidos_totais;
}

public function getEstatisticas_pedidos_sucesso(): int{
    return $this->estatisticas_pedidos_sucesso;
}
public function setEstatisticas_pedidos_sucesso(int $estatisticas_pedidos_sucesso): void{
  $this->estatisticas_pedidos_sucesso = $estatisticas_pedidos_sucesso;
}
public function getEstatisticas_pedidos_nao_concluidos(): int{
  return $this->estatisticas_pedidos_nao_concluidos;
}
public function setEstatisticas_pedidos_nao_concluidos(int $estatisticas_pedidos_nao_concluidos): void{
  $this->estatisticas_pedidos_nao_concluidos = $estatisticas_pedidos_nao_concluidos;
}
public function getEstatisticas_pedidos_totais(): int{
  return $this->estatisticas_pedidos_totais
}
public function setEstatisticas_totais(int $estatisticas_pedidos_totais): void{
  $this->estatisticas_pedidos_totais = $estatisticas_pedidos_totais;
}
public function toString(): String{
  return "Pedidos Sucesso: " . $this->estatisticas_pedidos_sucesso . " Pedidos não concluidos: " .  $this->estatisticas_pedidos_nao_concluidos .
  " Pedidos Totais: " .  $this->estatisticas_pedidos_totais;
}
}
?>
