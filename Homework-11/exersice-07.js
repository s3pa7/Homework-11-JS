/**
 * 
 */

function calculate(a,b,c){
	debugger;
	var result = 0;
	var a = document.getElementById("convert").value;
	var b = document.getElementById("first").value;
	var c = document.getElementById("second").value;
	var resultConvert = document.getElementById("resultConvert");
	if((b == "kg" && c == "kg") || (b == "lb" && c == "lb")){
		return alert("Please dont enter equal values");
	}
	if((b == "kg") && (c == "lb")){
		result = a*2.20462262;
		resultConvert.innerHTML = result;
		return result;
	}else if ((b == "lb") && (c == "kg")){
		result = 2.20462262/a;
		resultConvert.innerHTML = result;
		return result;
	}
}	
