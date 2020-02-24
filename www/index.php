<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Studee - Country Search</title>	
		<link rel="canonical" href="http://localhost:8001/">	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<script src="assets/js/jquery-3.4.1.min.js"></script>
		<script src="assets/js/site-script.js"></script>	
	</head>
	<body>
		<div class="section">
			<div class="container">
				<h3>Country Search:</h3>
				<form name="country" >
					<div class="row">
						<div class="col">
							<label for="name">Country:</label>
							<select id="name" name="name" class="selectpicker countrypicker form-control" data-live-search="true" data-default="United Kingdom" data-flag="true"></select>
						</div>
						<div class="col">					
							<input type="radio" id="r_name" name="check" value="name" checked>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="code">Country Code:</label> 
							<input id="code" name="code" type="text" maxlength="2" class="form-control">
						</div>
						<div class="col">					
							<input type="radio" id="r_code" name="check" value="code">
						</div>
					</div> 
					<div class="row">
						<div class="col">
							<label for="capital">Capital City:</label> 
							<input id="capital" name="capital" type="text" class="form-control">
						</div>
						<div class="col">
							<input type="radio" id="r_capital" name="check" value="capital">
						</div>
					</div> 
					<div class="row">
						<div class="col">
							<label for="currency">Currency Code:</label> 
							<input id="currency" name="currency" type="text" maxlength="3" class="form-control">
						</div>
						<div class="col">
						<input type="radio" id="r_currency" name="check" value="currency">
						</div>
					</div>
					<div class="row">
						<div class="col">		  
							<label for="language">Language:</label> 
							<input id="language" name="language" type="text" class="form-control">
						</div>
						<div class="col">
							<input type="radio" id="r_language" name="check" value="language">
						</div>
					</div>

						<div class="col">
							<button name="submit" id="search" type="submit" class="btn btn-primary">Search</button>
						</div>

				</form>
			</div>
		</div>	
	</body>

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>



<?php

	// $conn = mysqli_connect('db', 'root', 'test', "restcountries");

	// $query = 'SELECT * From countries';
	// $result = mysqli_query($conn, $query);


    // echo '<table class="table table-striped">';
    // echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
    // while($value = $result->fetch_array(MYSQLI_ASSOC)){
        // echo '<tr>';
        // echo '<td><span class="glyphicon glyphicon-search"></span></td>';
        // foreach($value as $element){
            // echo '<td>' . $element . '</td>';
        // }

        // echo '</tr>';
    // }
    // echo '</table>';

    // $result->close();

    // mysqli_close($conn);

?>
</html>