<?php
require_once 'bebida.php';

class Refrigerante extends Bebida {

   private $refrigerante;

   public function setRefrigerante($sabor){
      $this->refrigerante = $refrigerante;
   }

   public function getRefrigerante(){
      return $this->refrigerante;

   public function mostrarBebida() {
       return "Refrigerante: Marca: $this->marca, Categoria: $this->categoria, Valor: R$$this->valor, Ano: $this->ano";
   }

   public function verificarPreco($preco) {
       return $this->valor < 5;
   }
}
?>
