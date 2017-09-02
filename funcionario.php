<?php 
		class Funcionario 
		{

			protected $funcionario;

			
			public function Emprestar(Material $material, Professor $professor)
			{
				
					

				 $professor->AdicionarMaterial($material,$professor);
				
					}
		}
 ?>