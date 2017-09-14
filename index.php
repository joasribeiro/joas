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
$prof->setprofessor("joas");

$funcionario = new Funcionario();

$apagador = new apagador();
$notebook = new notebook();

$apagador->setpatrimonio("R001");
$apagador->setdescricao("APPLE");
$apagador->settipo("apagador");
$apagador->setestado("bom");

$notebook->setpatrimonio("R001");
$notebook->setdescricao("notebook");
$notebook->setestado("bom");


$funcionario->Emprestar($prof,$apagador);
$funcionario->Emprestar($prof,$notebook);




var_dump($prof);
//var_dump($funcionario);



 //$novo=new material();

// // $estado = new materi
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