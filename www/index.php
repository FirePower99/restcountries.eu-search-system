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
							<label for="alpha2code">Country Code:</label> 
							<input id="alpha2code" name="alpha2code" type="text" maxlength="2" class="form-control">
						</div>
						<div class="col">					
							<input type="radio" id="r_alpha2code" name="check" value="alpha2code">
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
							<label for="currencies">Currency Code:</label> 
							<input id="currencies" name="currencies" type="text" maxlength="3" class="form-control">
						</div>
						<div class="col">
						<input type="radio" id="r_currencies" name="check" value="currencies">
						</div>
					</div>
					<div class="row">
						<div class="col">		  
							<label for="languages">Language:</label> 
							<select id="languages" name="languages" class="selectpicker countrypicker form-control" data-live-search="true" data-default="" data-flag="true"></select>
						</div>
						<div class="col">
							<input type="radio" id="r_languages" name="check" value="languages">
						</div>
					</div>

						<div class="col">
							<button name="submit" id="search" type="submit" class="btn btn-primary">Search</button>
						</div>

				</form>
			</div>
		</div>
		<section class="tableholder" style=width: 100vw;">
		</section>
	</body>

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	
</html>