<?php
	//Métodos de consulta contra WebServices de AFIP

    function server_status($afip){
    	//Obtener estado del servidor
	    $server_status = $afip->RegisterScopeFive->GetServerStatus();
	    return($server_status);
	}

	function details_By_Cuit5($afip, $CUITRec){
		//Devuelve los datos del contribuyente correspondiente al identificador $CUITRec
		$details = $afip->RegisterScopeFive->GetTaxpayerDetails($CUITRec);
		return ($details);
	}


?>