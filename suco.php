<?php
require_once 'bebida.php';

class Suco extends Bebida {

   private $sabor;

   public function setSabor($sabor){
      $this->sabor = $sabor;
   }

   public function getSabor(){
      return $this->sabor;


   public function mostrarBebida() {
       return "Suco: Marca: $this->marca, Categoria: $this->categoria, Valor: R$$this->valor, Ano: $this->ano";
   }

   public function verificarPreco($preco) {
       return $this->valor < 2.5;
   }
}
?>
