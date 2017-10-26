<?php 
require_once __DIR__.'/interface_agenda.php';
require_once __DIR__.'/agendacontrole.php';
require_once __DIR__.'/contato.php';




$agenda = new AgendaControle();
  
$c1 = new Contato();

$c1 ->setNome('joasribeiro');
$c1 ->setEmail('joas036@gmail.com');

$nome = $c1->getNome();

$email = $c1->getEmail();

$c2= new Contato();
$c2 ->setNome('silvajunior');
$c2->setEmail('silvajunior@gmail.com');

$nome2 = $c2->getNome();
$email2 = $c2->getEmail();

$agenda-> add($nome,$email);
$agenda ->add($nome2,$email2);

print_r($agenda);