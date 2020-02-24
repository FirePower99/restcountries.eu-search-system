$(document).ready(function(){
	$( ".row" ).click(function() {
		$(this).find('input[type=radio]').prop('checked', true);
	});
	$( "#search" ).click(function() {		
		var x = $("input[name='check']:checked").val();
		if($('#' + x).val() == ''){
		alert(x + ' can not be left blank');
		}
		event.preventDefault();	
	});
})

var countryInput = $(document).find('.countrypicker');
var countryList = "";

$.get('https://restcountries.eu/rest/v2/all?fields=alpha2Code;name', function(data) {
	
	countryList ="";

	$.each(data, function(index, val) {

		countryList += "<option data-country-code='" + val.alpha2Code + "' data-tokens='" + val.alpha2Code + " " + val.name + "' value='" + val.name + "'>" + val.name + "</option>";

	});

	$(document).find('.countrypicker').append(countryList);
});



