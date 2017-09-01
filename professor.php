<?php 
		/**
		* 
		*/
		class Professor
		{
			protected $Professor;
			protected $materiais=[];

			public function AdicionarMaterial(Material $materiais)
			{
				$this->materiais=$materiais;
			}

			public function getmateriais(){
				return $this->materiais;
			}

			

		}

		/**
		* 
		*/
		
 ?>