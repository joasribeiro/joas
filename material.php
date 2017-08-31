<?php 
		
		class Material
		{
			protected $id;
			protected $descricao;
			protected $patrimonio;
			protected $tipo;
			protected $estado;
			protected $quantidade;



			public function __construct($descricao,$tipo)
			{
				$this->descricao=$descricao;
				$this->tipo=$tipo;
				// $this->estado=$estado;


			}

			public function setdescricao($descricao){
				 $this->descricao=$descricao;

			}
			public function getdescricao(){
				return $this->descricao;

			}

			public function setpatrimonio($patrimonio){
				$this->patrimonio=$patrimonio;

			}
			public function getpatrimonio(){
				return $this->patrimonio;

			}
			public function settipo($tipo){
				$this->tipo=$tipo;

			}
			public function gettipo(){
				return $this->tipo;

			}

			public function setestado($estado){

				$this->estado=$estado;

			}
			public function getestado(){
				if($this->estado="problema"){
					echo "este material esta indisponivel no momento pois esta em manutenção";
				}else{
					return $this->estado;
					echo "bom proveito!!!";
				}
				

			}
			public function setquantidade($quantidade){
				$this->quantidade=$quantidade;

			}
			public function getquantidade(){
				return $this->quantidade;

			}

		}


?>