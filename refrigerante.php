<?php
require_once 'bebida.php';

class Refrigerante extends Bebida {

   public function mostrarBebida() {
       return "Refrigerante: Marca: $this->marca, Categoria: $this->categoria, Valor: R$$this->valor, Ano: $this->ano";
   }

   public function verificarPreco() {
       return $this->valor < 5;
   }
}
?>
