<?php
	
	include 'config.php';
	include 'Afip.php';

	$CUIT_OPERATION_HOMO = 23233430129; // 23233430129; // 30710405863; // 20938628174;
	$CUIT_OPERATION_PROD = 30710405863;
	$ISPROD = FALSE;
	$PF  = 'xxxxx';
	$CERTuse = '';
	$KEYuse  = '';


	if (($ISPROD == FALSE) || (!isset($ISPROD))) {
				$CUIT_OPERATION = $CUIT_OPERATION_HOMO;
				$CERTuse = 'ncuTestA5.crt';
				$KEYuse  = 'ncuKeyTest.key';
			}
		else
		{
			$CUIT_OPERATION = $CUIT_OPERATION_PROD;
			$CERTuse = 'cert';
			$KEYuse  = 'key';
		}

	$afip = new Afip(array('CUIT' => $CUIT_OPERATION, 'production' => $ISPROD, 'passphrase' => $PF, 'cert' => $CERTuse, 'key' => $KEYuse));