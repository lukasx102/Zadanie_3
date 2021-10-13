<?php
function  xmlprocessing ($ico){

	//adresa portalu s databazou firiem
$url = ('http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico='.$ico.'');

//spracovanie xml do pola
	set_error_handler(
		function ($severity, $message, $file, $line) {
			throw new ErrorException($message, $severity, $severity, $file, $line);
		}
	);
	try {
		$fileContents = file_get_contents($url);
	}
	catch (Exception $e){
		$error .= $e->getMessage() . PHP_EOL;
		file_put_contents('log.txt',$e.PHP_EOL, FILE_APPEND);
		die('server nenajdeny');
	}
	restore_error_handler();

$fileContents = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $fileContents);
$xml = simplexml_load_string($fileContents);
$xml1 = new SimpleXMLElement($fileContents);
$response = $xml->xpath('//areOdpoved');
$json_string = json_encode($response);
$result_array = json_decode($json_string, TRUE);


foreach ($result_array as $row=>$innerArray) {
	if (isset($innerArray['DE'])){
		die('zadané nesprávne ICO');
	}
	foreach ( $innerArray as $innerRow => $value ) {
		if ( isset( $value['DICO'] ) ) {
			$dico = $value['DICO'];

		}


		if ( isset( $value['DOF'] ) ) {
			$name = $value['DOF'];

		}

		if ( isset( $value['DDV'] ) ) {
			$date_of_birth = $value['DDV'];

		}
		if ( isset( $value['DDV'] ) ) {
			$date_of_birth = $value['DDV'];

		}


		if ( is_array( $value ) ) {
			foreach ( $value as $lastarray ) {
				if ( isset( $lastarray['DNPF'] ) ) {
					$company = $lastarray['DNPF'];

				}
				if ( isset( $lastarray['DNOK'] ) ) {
					$street = $lastarray['DNOK'];

				}
				if ( isset( $lastarray['DN'] ) ) {
					$city = $lastarray['DN'];

				}

				if ( isset( $lastarray['DN'] ) ) {
					$city = $lastarray['DN'];

				}
				if ( isset( $lastarray['DNOK'] ) ) {
					$country = $lastarray['DNOK'];

				}
				if ( isset( $lastarray['DPSC'] ) ) {
					$psc = $lastarray['DPSC'];

				}
				if ( isset( $lastarray['DT'] ) ) {
					$form = $lastarray['DT'];

				}

			}
		}

}

}

	return    new Response($dico,$name,$date_of_birth,$company,$street,$city,$country,$psc);

}