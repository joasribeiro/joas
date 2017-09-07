<?php 
		class Funcionario 
		{

			
			public function Emprestar(Material $mat, Professor $prof)
			{

				/**
		 * O funcionário deve verificar o estado do material no momento do empréstimo
		 * 		Se o material estiver bom, segue a operação de empréstimo, senão, cancela
		 */
				
				if ($material->getestado()=="bom") {
					if ($this->autorizaemprestimo($mat,$prof)) {//deve ser igual o la de cima
						
				   return $prof->AdicionarMaterial($mat);

					}else{
						/**
			 * Se o material estiver com problema, então cancela a operação e retorna false
			 */
						return false;
					}
							
					
		}

		protected function autorizaemprestimo($professor, $material){//criei aki oque ele ta pedindo

							$listamateriais = $professor->getmateriais();

							foreach ($listamateriais as $mat) {
								if ($mat->gettipo()=="datashow") {

									return false;
								}


							}
							return true;
		}

	}
 ?>