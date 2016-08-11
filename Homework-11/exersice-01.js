/**
 * 
 */
function rows (arr1) {
	console.log(arr1);
	var counter = 0;
	var maxEl = 0;
	var currentEl = 0;
	var result = 0;
	for(var i = 0; i < arr1.length; i++){
		var firstChar = arr1[i];
		for(var j = 0; j < arr1.length; j++){
			if(firstChar == arr1[j]){
				counter++;
				
			}
		}
		if(counter > maxEl) {
			maxEl = counter;
			currentEl = arr1[i];
		}
		counter = 0;
	}
	return result = currentEl + " " + "("+maxEl + " " + "times"  + ")";
}
