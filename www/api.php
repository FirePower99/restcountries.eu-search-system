<?php


if ($_GET['name'] == "country_list"){

$url = 'https://restcountries.eu/rest/v2/all?fields=alpha2Code;name';
$curl = curl_init($url);
$response = curl_exec($curl);
curl_close($curl);
echo (json_decode($response));


exit;
}

else 
	
exit;


?>