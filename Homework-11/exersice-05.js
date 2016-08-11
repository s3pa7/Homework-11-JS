/**
 * 
 */
function CalculatSphere (a) {
	const P = 3.14;
	var a = document.getElementById("radius").value;

	 //V=4/3.π.R.R.R
	 var V = parseInt(4/3*P*a*a*a);
	 document.getElementById("vohme").value = V;
	 return V;
}