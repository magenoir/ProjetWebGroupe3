function getliste() {
	 var xmlhttp = new XMLHttpRequest();
	 xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      myFunction(this);
	    }
	  };
	  xmlhttp.open("GET", "liste_inscrit.xml", true);
	  xmlhttp.send();
	}
function myFunction(xml) {
	  var i;
	  var xmlDoc = xml.responseXML;
	  var table="<tr><th>Nom</th><th>Mail</th></tr>";
	  var x = xmlDoc.getElementsByTagName("liste");
	  for (i = 0; i <x.length; i++) { 
	    table += "<tr><td>" +
	    x[i].getElementsByTagName("nom")[0].childNodes[0].nodeValue +
	    "</td><td>" +
	    x[i].getElementsByTagName("mail")[0].childNodes[0].nodeValue +
	    "</td></tr>";
	  }
	 document.getElementById("tab").innerHTML = table;
	};