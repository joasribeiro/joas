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

$mat = new Material();
$mat2= new Material();

//$funcionario->Emprestar($mat,$prof);
$mat->setpatrimonio("R001");
$mat->setdescricao("APPLE");
$mat->settipo("NOTEBOOK");

$mat2->setpatrimonio("R001");
$mat2->setdescricao("acer");


$funcionario->Emprestar($mat2,$prof);
$funcionario->Emprestar($mat2,$prof);
//$prof->AdicionarMaterial($mat);
//$prof->AdicionarMaterial($mat2);
$prof->getmateriais();


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