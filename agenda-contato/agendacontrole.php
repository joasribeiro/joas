<?php



class AgendaControle implements Agenda
{
	protected $contatos = [];

	 public function add($n, $e)
      {
        $this->contatos[] = [$n,$e];
      }
	
}