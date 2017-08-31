<?php 
require 'material.php';
require 'apagador.php';
require 'cabo.php';
require 'cadeira.php';
require 'hdmi.php';
require 'mesa.php';
require 'notebook.php';
require 'onibus.php';
require 'pincel.php';
require 'televisao.php';


$novo=new material();

// $estado= new material;
$novo->setdescricao('afffff');
$novo->setestado("ruiaaaaaaaaaaaam");




echo 'eu falei isso:'.$novo->getdescricao()."\nsendo seu tipo:".$novo->gettipo();
echo "\n";

$novo2 = new material('segunda descrição', 'onibus');

echo 'eu falei isso:'.$novo2->getdescricao()."\nsendo seu tipo:".$novo2->gettipo();
echo "\n";

echo "\nmeu estado é esse:".$novo->getestado();
?>