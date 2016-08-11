/**
 * 
 */
function validName(text) {
	return text.split(' ').length == 3;
}
function validDate(text) {
	var dateArray = text.split('/');
	
	if (dateArray.length != 3) {
		return false;
	}
	
	var day = parseInt(dateArray[0]);
	var month = parseInt(dateArray[1]);
	var year = parseInt(dateArray[2]);
	
	if (dateArray[0].length != 2) {
		return false;
	}
	
	if (day < 1 || day > 31) {
		return false;
	}
	
	if (dateArray[1].length != 2) {
		return false;
	}
	
	if (month < 1 || month > 12) {
		return false;
	}
	
	if (dateArray[2].length != 4) {
		return false;
	}
	
	var currentDate= new Date();
	if (year < 1900 || year > currentDate.getFullYear() - 1) {
		return false;
	}
	
	return true;
}

function isValidPhone(text) {
	if (text.indexOf('+359') != 0 || isNaN(parseInt(text))) {
		return false;
	}
	
	return true;
}

function isValidEmail(text) {
	return text.match(/[a-z\.\-\_]+@[a-z\.\-\_]+\.[a-z]{2,4}/) ? true : false;
}
function isValidSelect (text){
	debugger;
	if(text == ""){
		return false;
	}
		
	return true;
}
function isValidCountry (text){
	debugger;
	var select = document.getElementById("select")
	if(select.value == "Other"){
		var dcountry = document.querySelector("#dcountry");
		if(dcountry.value == ""){
			return false;
		}
	}
	return true;
}
