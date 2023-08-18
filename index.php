<?php
require_once 'modelo/producto.php';
require_once 'modelo/lineacompra.php';
require_once 'modelo/compra.php';

$pro= new producto();
$pro->id=1;
$pro->descripcion='pantalon';
$pro->precio=30000;

$pro2= new producto();
$pro2->id=2;
$pro2->descripcion='buzo';
$pro2->precio=20000;

$pro3= new producto();
$pro3->id=3;
$pro3->descripcion='camperon';
$pro3->precio=25000;

$lin= new lineacompra();
$lin->id=1;
$lin->producto=$pro;
$lin->cantidad=1;
$lin->subtotal=30000;

$lin2= new lineacompra();
$lin2->id=2;
$lin2->producto=$pro2;
$lin2->cantidad=1;
$lin2->subtotal=20000;

$lin3= new lineacompra();
$lin3->id=3;
$lin3->producto=$pro3;
$lin3->cantidad=2;
$lin3->subtotal=50000;

$com= new compra();
$com->id=1;
$com->fecha='18/08/2023';
$com->montototal=100000;
$com->tipocompra=$_GET{'tipo'};
$com->listlineascompra[]=$lin;
$com->listlineascompra[]=$lin2;
$com->listlineascompra[]=$lin3;
$com->mostrardatos();

