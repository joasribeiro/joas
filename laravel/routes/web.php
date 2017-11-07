<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|a
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nomes/{a}/{b}/{c}', function ($a,$b,$c) {
  return view('nomes', ['a1'=>$a,'a2'=>$b,'a3'=>$c]);
});

Route::get('/soma/{a}/{b}', function ($a,$b) {
  return view('nomes', ['a1'=>$a,'a2'=>$b]);
});

Route::get('/blog', function () {
    echo "<center><br><br><h1>Bem Vindo ao Blog</h1></center>";
});

Route::get('/adm', function () {
    echo "<center><br><br><h1>Bem Vindo a pagina Administrativa</h1></center>";
});

Route::get('/usuarios/{a}/{b}/{c}/{d}', function($a,$b,$c,$d){
  echo "<table border='1' align='center'>
    <tr><th>USUARIOS</th></tr>
    <tr><td>{$a}</td></tr>
    <tr><td>{$b}</td></tr>
    <tr><td>{$c}</td></tr>
    <tr><td>{$d}</td></tr>
  </table>";
});

Route::get('/media/{a}/{b}/{c}/{d}/{e}', function($a,$b,$c,$d,$e){
  $m = ($a+$b+$c+$d+$e)/5;
  echo "<table border='1' align='center'>
    <tr><th colspan='2'>Média entre os valores</th></tr>
    <tr><th>Valor 1</th><td>{$a}</td></tr>
    <tr><th>Valor 2</th><td>{$b}</td></tr>
    <tr><th>Valor 3</th><td>{$c}</td></tr>
    <tr><th>Valor 4</th><td>{$d}</td></tr>
    <tr><th>Valor 5</th><td>{$e}</td></tr>
    <tr><th>Média </th><td>{$m}</td></tr>
  </table>";
});

Route::get('/nomei/{a}/{b}', function($a,$b){
  if ($a == $b) {
    $m = "SIM";
  }else {
    $m = "NÃO";
  }
  echo "<table border='1' align='center'>
    <tr><th colspan='2'>Os nomes são iguais?</th></tr>
    <tr><th>1º Nome</th><td>{$a}</td></tr>
    <tr><th>2º Nome</th><td>{$b}</td></tr>
    <tr><th>Média </th><td>{$m}</td></tr>
  </table>";
});

Route::get('/usuarios/{usuario}/{j}', function($usuario,$j){
  echo "<center><br><h1>Bem Vindo,{$usuario}</h1><br><b>{$j}<b></center>";
});


Route::get('/template/{a}/{b}/{c}/{d}', function ($a,$b,$c,$d) {
  return view('template',['a' => $a, 'b' => $b, 'c' => $c, 'd' => $d] );
});
route::get('/section', function(){
  return view('section');
});

