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
				$this->materiais[]=$materiais;
			}

			public function getmateriais(){
				return $this->materiais;
			}

			public function setprofessor($prof){
				$this->Professor=$prof;
			}

			public function getprofessor(){
				return $this->Professor;
			}

			

		}

		/**
		* 
		*/
		
 ?>