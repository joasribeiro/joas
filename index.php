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
require 'professor.php';
require 'funcionario.php';




$prof = new Professor();

$funcionario = new Funcionario();

$mat = new Material();

//$funcionario->Emprestar($mat,$prof);
$mat->setpatrimonio("R001");
$mat->setdescricao("APPLE");
$mat->settipo("NOTEBOOK");

$prof->adicionarMaterial($mat);


$exibirmat=$prof->getmateriais();
var_dump($prof);


 //$novo=new material();

// // $estado = new material;
 //$novo->setdescricao('afffff');
//$material->setestado("aaa");

// $


// echo 'eu falei isso:'.$novo->getdescricao()."\nsendo seu tipo:".$novo->gettipo();
// echo "\n";

// $novo2 = new material('segunda descrição', 'onibus');

// echo 'eu falei isso:'.$novo2->getdescricao()."\nsendo seu tipo:".$novo2->gettipo();
// echo "\n";

 //echo "\nmeu estado é esse:".$material->getestado();
?>