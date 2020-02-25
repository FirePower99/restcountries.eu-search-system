<?php

function db () {
    static $conn;
    if ($conn===NULL){ 
		$config = parse_ini_file('assets/etc/config.ini'); 
        $conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
    }
    return $conn;
}

function RestCountryApi($type, $field) {
	
	if ($type == 'alpha2code') { $type = 'alpha'; }
	if ($type == 'currencies') { $type = 'currency'; }
	if ($type == 'languages') { $type = 'lang'; }

	$url = 'https://restcountries.eu/rest/v2/'.$type.'/'.$field;
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_exec($curl);
	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		if($httpcode == 404) {
		echo 'no results found';
		curl_close($curl);
		exit;
	}
	curl_close($curl);
	$json = file_get_contents($url);
	$dataArray = json_decode($json, true);
	$count= count($dataArray);

	echo '<table class="table table-striped">';
	echo '<thead><tr><th scope="col">Name</th><th scope="col">Dialing Codes</th><th scope="col">Region</th><th scope="col">Capital</th><th scope="col">Timezones</th><th scope="col">Currencies</th><th scope="col">Flag</th></tr></thead>';

	if ($type == "alpha") {
	
		// REST RESULTS
		$langcount= count($dataArray["languages"]);
		$timecount= count($dataArray["timezones"]);
		$currcount= count($dataArray["currencies"]);
		$_name = $dataArray["name"];
		$_alpha2code = $dataArray["alpha2Code"];
		$_region = $dataArray["region"];
		$_capital = $dataArray["capital"];
		$_callingCodes = $dataArray["callingCodes"][0];
		$_flag = $dataArray["flag"];
		$_languages = '';
		$_timezones = '';
		$_currencies = '';
		for ($f=0; $f < $langcount; $f++) { $_languages .= $dataArray["languages"][$f]["iso639_1"]. ";"; }
		for ($g=0; $g < $timecount; $g++) { $_timezones .= ''.$dataArray["timezones"][$g]. ';'; }
		for ($h=0; $h < $currcount; $h++) { $_currencies .= $dataArray["currencies"][$h]["code"]. ";"; }
		
		// OUTPUT HTML TABLE			
		echo '<tr>';
		echo '<td>'.$_name.'</td>';
		echo '<td>'.$_callingCodes.'</td>';
		echo '<td>'.$_region.'</td>';
		echo '<td>'.$_capital.'</td>';
		echo '<td>'.$_timezones.'</td>';
		echo '<td>'.$_currencies.'</td>';
		echo '<td><img src="'.$_flag.'" alt="Smiley face" height="42"></td>';
		echo '</tr>';

		
		// DATABASE QUERY
		$conn = db();
		$query = 'SELECT alpha2code From countries WHERE alpha2code = "'.$_alpha2code.'"';
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) == 0){
			$insert = 'INSERT INTO countries (name, alpha2code, region, capital, callingcodes, timezones, languages, currencies, flag) VALUES ("'.$_name.'", "'.$_alpha2code.'", "'.$_region.'", "'.$_capital.'", "'.$_callingCodes.'", "'.$_timezones.'", "'.$_languages.'", "'.$_currencies.'", "'.$_flag.'" )';
			if (mysqli_query($conn, $insert)) {

			} else {
				echo "Error: " . $sql . "" . mysqli_error($conn);
			}
		}
		
	} else {
		
		for ($i=0; $i < $count; $i++) {
			
			// REST RESULTS
			$langcount= count($dataArray[$i]["languages"]);
			$timecount= count($dataArray[$i]["timezones"]);
			$currcount= count($dataArray[$i]["currencies"]);
			$_name = $dataArray[$i]["name"];
			$_alpha2code = $dataArray[$i]["alpha2Code"];
			$_region = $dataArray[$i]["region"];
			$_capital = $dataArray[$i]["capital"];
			$_callingCodes = $dataArray[$i]["callingCodes"][0];
			$_flag = $dataArray[$i]["flag"];
			$_languages = '';
			$_timezones = '';
			$_currencies = '';
			for ($f=0; $f < $langcount; $f++) { $_languages .= $dataArray[$i]["languages"][$f]["iso639_1"]. ";"; }
			for ($g=0; $g < $timecount; $g++) { $_timezones .= ''.$dataArray[$i]["timezones"][$g]. ';'; }
			for ($h=0; $h < $currcount; $h++) { $_currencies .= $dataArray[$i]["currencies"][$h]["code"]. ";"; }
			
			// OUTPUT HTML TABLE			
			echo '<tr>';
			echo '<td>'.$_name.'</td>';
			echo '<td>'.$_callingCodes.'</td>';
			echo '<td>'.$_region.'</td>';
			echo '<td>'.$_capital.'</td>';
			echo '<td>'.$_timezones.'</td>';
			echo '<td>'.$_currencies.'</td>';
			echo '<td><img src="'.$_flag.'" alt="Smiley face" height="42"></td>';
			echo '</tr>';		
			
			// DATABASE QUERY
			$conn = db();
			$query = 'SELECT alpha2code From countries WHERE alpha2code = "'.$_alpha2code.'"';
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) == 0){
				$conn = db();
				$insert = 'INSERT INTO countries (name, alpha2code, region, capital, callingcodes, timezones, languages, currencies, flag) VALUES ("'.$_name.'", "'.$_alpha2code.'", "'.$_region.'", "'.$_capital.'", "'.$_callingCodes.'", "'.$_timezones.'", "'.$_languages.'", "'.$_currencies.'", "'.$_flag.'" )';
				if (mysqli_query($conn, $insert)) {
					
				} else {
					echo "Error: " . $sql . "" . mysqli_error($conn);
				}
			}
		}
	}
	
	echo '</table>';
	
}

if ($_POST['name'] == "search"){
	
	$conn = db();
	$type = mysqli_real_escape_string($conn, $_POST['type']);
	$field = mysqli_real_escape_string($conn, $_POST['field']);

	RestCountryApi($type, $field);

	exit;
}

else 
	
exit;


?>