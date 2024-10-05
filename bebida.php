<?php
abstract class Bebida {
   protected $marca;
   protected $categoria;
   protected $valor;
   protected $ano;

   public function __construct($marca, $categoria, $valor, $ano) {
       $this->marca = $marca;
       $this->categoria = $categoria;
       $this->valor = $valor;
       $this->ano = $ano;
   }

   // Métodos abstratos
   abstract public function mostrarBebida();
   abstract public function verificarPreco();
}
?>
