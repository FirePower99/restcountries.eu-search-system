$(document).ready(function(){
	$( ".row" ).click(function() {
		$(this).find('input[type=radio]').prop('checked', true);
	});
	$( "#search" ).click(function() {
		var x = $("input[name='check']:checked").val();		
		if($('#' + x).val() == ''){
		alert(x + ' can not be left blank');
		} else {
			$.post( "api.php", { name: "search", type: x, field: $('#' + x).val() }).done(function( data ) {
			});
		}
		event.preventDefault();
	});
})

var countryList = "";
$.get('https://restcountries.eu/rest/v2/all?fields=alpha2Code;name', function(data) {
	$.each(data, function(index, val) {
		countryList += "<option data-country-code='" + val.alpha2Code + "' data-tokens='" + val.alpha2Code + " " + val.name + "' value='" + val.name + "'>" + val.name + "</option>";
	});
	$(document).find('#name').append(countryList);
});

var languageList = "";
$.get('/assets/js/language-codes_json.json', function(data) {
	$.each(data, function(index, val) {
		languageList += "<option data-language-code='" + val.alpha2 + "' data-tokens='" + val.alpha2 + " " + val.English + "' value='" + val.alpha2 + "'>" + val.English + "</option>";
	});
	$(document).find('#languages').append(languageList);
});

