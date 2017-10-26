<?php 
class Contato
{   
    protected $nome;
    protected $email;

    

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($n)
    {
        $this->nome = $n;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $this->email = $e;
    }

}
