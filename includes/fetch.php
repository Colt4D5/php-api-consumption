<?php
	$API_KEY = '9973533';
	$url = "https://www.thecocktaildb.com/api/json/v2/" . $API_KEY . "/filter.php?c=Cocktail";
	
	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($client);
	
	$result = json_decode($response);

	$drinks = $result->drinks;