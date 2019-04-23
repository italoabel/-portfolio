<?php

function verificarCpf($cpfcnpj){
	
		$n = str_split($cpfcnpj);
	
		//verificao do primeiro digito
		$soma = 0;
		$cont = 10;
		for ($i=0; $i < 9; $i++) {
			$aux = $n[$i] * $cont; 
			$soma = $soma + $aux;
			$cont--;
		}
		
		$div = $soma % 11;

		if ($div == 1 || $div == 0) {
			$teste1 = 0;

		}else{
			$teste1 = 11 - $div; 
		}


		if ($teste1 == $n[9]) {
			
			//verificar segundo digito

			$soma = 0;
			$cont = 11;

			for ($i=0; $i < 10 ; $i++) { 
				$aux = $n[$i] * $cont;
				$soma = $soma + $aux;
				$cont--;
			}

			$div2 = $soma % 11;

			if ($div2 == 1 || $div2 == 0) {
				$teste2 = 0;

			}else{
				$teste2 = 11 - $div2; 

			}

			

			if ($teste2 == $n[10]) {
				return true;
			}else{
				return false;
			}


		}else{
			return false;
		}

		
}

function verificarCnpj($cpfcnpj){

	$n = str_split($cpfcnpj);

	//verificar primeiro digito
	$soma = 0;

	$cont = 5;
	for ($i=0; $i < 4; $i++) { 
		$aux = $n[$i] * $cont;
		$soma = $soma + $aux;
		$cont--;
	}

	$cont = 9;
	for ($i= 4; $i < 12; $i++) { 
		$aux = $n[$i] * $cont;
		$soma = $soma + $aux;
		$cont--;
	}

	$div1 = $soma % 11;

	if ($div1 < 2 ) {
		$teste1 = 0;
	}else{
		$teste1 = 11 - $div1;
	}

	if($teste1 == $n[12]){

		//verificar segundo digito
		$soma = 0;

		$cont = 6;
		for ($i=0; $i < 5; $i++) { 
			$aux = $n[$i] * $cont;
			$soma = $soma + $aux;
			
			$cont--;
			
		}

		$cont = 9;
		for ($i=5; $i < 13; $i++) { 
			$aux = $n[$i] * $cont;
			$soma = $soma + $aux;
			
			$cont--;
			
		}
		
		$div2 = $soma % 11;

		if ($div2 < 2) {
			$teste2 = 0;
		}else{
			$teste2 = 11 - $div2;
		}


		if ($teste2 == $n[13]) {
			return true;
		}else{
			return false;
		}

	}else{
		return false;
	}


}


function get_post_action($name){
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}


?>