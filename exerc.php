<?php
require_once 'Vinho.php';
require_once 'refrigerante.php';
require_once 'suco.php';

$vinho = new Vinho("Vinho Tinto", "Seco", 30.00, 2020);
$refrigerante = new Refrigerante("Coca-Cola", "Cola", 3.50, 2022);
$suco = new Suco("Del Valle", "Laranja", 2.00, 2023);

$detalheVinho = $vinho->mostrarBebida();
$ofertaVinho = $vinho->verificarPreco() ? "Promoção disponível!" : "Preço regular.";

$detalheRefrigerante = $refrigerante->mostrarBebida();
$ofertaRefrigerante = $refrigerante->verificarPreco() ? "Promoção disponível!" : "Preço regular.";

$detalheSuco = $suco->mostrarBebida();
$ofertaSuco = $suco->verificarPreco() ? "Promoção disponível!" : "Preço regular.";
?>
