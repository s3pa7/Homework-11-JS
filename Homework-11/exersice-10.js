/**
 * 
 */

function validate (){
	var name = document.querySelector("#names");
	var fnames = document.querySelector("#fnames");
	var select = document.querySelector("#select");
	var area = document.querySelector("#area");
	var city = document.querySelector("#city");
	var gsm = document.querySelector("#gsm");
	var phone = document.querySelector("#phone");
	var nameLabel = document.querySelector("#name");
	var fnameLabel = document.querySelector("#nameLabel");
	var areaLabel = document.querySelector("#label-area");
	var cityLabel = document.querySelector("#label-city");
	var phoneLabel = document.querySelector("#label-phone");
	var gsmLabel = document.querySelector("#label-gsm");
	var selectLabel = document.querySelector("#label-select");
	var dLabel = document.querySelector("#label-dcountry");
	var dCountry = document.querySelector("#dcountry");
	
	
	if(name.value == ""){

		var idP = document.querySelector("#paragraf-name");
		if(idP == null){
			var p  = document.createElement("p");
			var t = document.createTextNode("Полето е задължително");
			var pe = document.querySelector("p");
			p.style.color = "red";
		    p.style.display = "inline-block";
		    p.style.fontSize = "12px";
		    p.id = "paragraf-name";
			p.appendChild(t);
			nameLabel.appendChild(p);
			name.style.border = "2px solid red";
		}
	}else if(name.value != ""){
		var nameP = document.querySelector("#paragraf-name");
		if(nameP != null){
			name.removeAttribute("style");
			nameLabel.removeChild(nameP);
		}
	}
	
	if(fnames.value == ""){
		var idFname = document.querySelector("#paragraf-fname");
		if(idFname == null){
			var p  = document.createElement("p");
			var t = document.createTextNode("Полето е задължително");
			var pe = document.querySelector("p");
			p.style.color = "red";
		    p.style.display = "inline-block";
		    p.style.fontSize = "12px";
		    p.id = "paragraf-fname";
			p.appendChild(t);
			fnameLabel.appendChild(p);
			fnames.style.border = "2px solid red";
		}
	}else if (fnames.value != ""){
		var fnamesP = document.querySelector("#paragraf-fname");
		if(fnamesP != null){
			fnames.removeAttribute("style");
			fnameLabel.removeChild(fnamesP);
		}
	}

	if(select.value == ""){
		var idselect = document.querySelector("#paragraf-select");
		if(idselect == null){
			var p  = document.createElement("p");
			var t = document.createTextNode("Полето е задължително");
			var pe = document.querySelector("p");
			p.style.color = "red";
		    p.style.display = "inline-block";
		    p.style.fontSize = "12px";
		    p.id = "paragraf-select";
			p.appendChild(t);
			selectLabel.appendChild(p);
			select.style.border = "2px solid red";
		}
	}else if (select.value != ""){
		var selectP = document.querySelector("#paragraf-select");
		if(selectP != null){
			select.removeAttribute("style");
			selectLabel.removeChild(selectP);
		}
	}
	
	if(area.value == ""){
		var idArea = document.querySelector("#paragraf-area");
		if(idArea == null){
			var p  = document.createElement("p");
			var t = document.createTextNode("Полето е задължително");
			var pe = document.querySelector("p");
			p.style.color = "red";
		    p.style.display = "inline-block";
		    p.style.fontSize = "12px";
		    p.id = "paragraf-area";
			p.appendChild(t);
			areaLabel.appendChild(p);
			area.style.border = "2px solid red";
		}
	}else if (area.value != ""){
		var areaP = document.querySelector("#paragraf-area");
		if(areaP != null){
			area.removeAttribute("style");
			areaLabel.removeChild(areaP);
		}
	}
	if(city.value == ""){
		var idCity = document.querySelector("#paragraf-city");
		if(idCity == null){
			var p  = document.createElement("p");
			var t = document.createTextNode("Полето е задължително");
			var pe = document.querySelector("p");
			p.style.color = "red";
		    p.style.display = "inline-block";
		    p.style.fontSize = "12px";
		    p.id = "paragraf-city";
			p.appendChild(t);
			cityLabel.appendChild(p);
			city.style.border = "2px solid red";
		}
	}else if (city.value != ""){
		var cityP = document.querySelector("#paragraf-city");
		if(cityP != null){
			city.removeAttribute("style");
			cityLabel.removeChild(cityP);
		}
	}
	if(phone.value == ""){
		var idPhone = document.querySelector("#paragraf-phone");
		if(idPhone == null){
			var p  = document.createElement("p");
			var t = document.createTextNode("Полето е задължително");
			var pe = document.querySelector("p");
			p.style.color = "red";
		    p.style.display = "inline-block";
		    p.style.fontSize = "12px";
		    p.id = "paragraf-phone";
			p.appendChild(t);
			phoneLabel.appendChild(p);
			phone.style.border = "2px solid red";
		}
	}else if (phone.value != ""){
		var phoneP = document.querySelector("#paragraf-phone");
		if(phoneP != null){
			phone.removeAttribute("style");
			phoneLabel.removeChild(phoneP);
		}
	}
	if(gsm.value == ""){
		var idGsm = document.querySelector("#paragraf-gsm");
		if(idGsm == null){
			var p  = document.createElement("p");
			var t = document.createTextNode("Полето е задължително");
			var pe = document.querySelector("p");
			p.style.color = "red";
		    p.style.display = "inline-block";
		    p.style.fontSize = "12px";
		    p.id = "paragraf-gsm";
			p.appendChild(t);
			gsmLabel.appendChild(p);
			gsm.style.border = "2px solid red";
		}
	}else if (gsm.value != ""){
		var gsmP = document.querySelector("#paragraf-gsm");
		if(gsmP != null){
			gsm.removeAttribute("style");
			gsmLabel.removeChild(gsmP);
		}
	}

}
