<?php
require_once 'bebida.php';

class Suco extends Bebida {

   public function mostrarBebida() {
       return "Suco: Marca: $this->marca, Categoria: $this->categoria, Valor: R$$this->valor, Ano: $this->ano";
   }

   public function verificarPreco() {
       return $this->valor < 2.5;
   }
}
?>
