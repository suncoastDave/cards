<?php

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://argusprod.dstsystems.com/pharmacy-drug-pricing/1.0/service/PharmacyPricing/?radius=$radius&zipCode=$zipCode&quantity=$quantity&ndc=$ndc",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Basic V1NBWElBUlg6OFBaNzU1ZUVrZVVnQ3ByUHg1V3p1TUFDcGlJPQ==',
		),
	));

	$response = curl_exec($curl);

	curl_close($curl);



	$response = json_decode(file_get_contents('response.json'), true);
	$data = $response['DrugPricing'];

	$pharmacyList = [];
	$filtered = array_filter($data, function($element) use (&$pharmacyList) {
		foreach ($pharmacyList as $pharmacyIncluded) {
			if ($pharmacyIncluded['pharmacy'] === $element['pharmacy']) {
				if ($pharmacyIncluded['price'] === $element['price']) {
					// This is a duplicate based on pharmacy name and price
					return false;
				}
			}
		}

		$pharmacyList[] = $element;

		return true;
	});

	$response['DrugPricing'] = $filtered;

	print_r($response);die();

		?>