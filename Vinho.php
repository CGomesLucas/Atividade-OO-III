<?php
require_once 'bebida.php';

class Vinho extends Bebida {

   public function mostrarBebida() {
       return "Vinho: Marca: $this->marca, Categoria: $this->categoria, Valor: R$$this->valor, Ano: $this->ano";
   }

   public function verificarPreco() {
       return $this->valor < 25;
   }
}
?>
