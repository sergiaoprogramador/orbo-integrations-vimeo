function alteraDados() {
  
	let xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
      let jsonData = JSON.parse(this.responseText)
      console.log(jsonData)
      document.getElementById("dataUser").innerHTML = jsonData.nome;
      document.getElementById("dataEmail").innerHTML = jsonData.email;
      document.getElementById("dataBirthday").innerHTML = jsonData.birthday;
      document.getElementById("dataCountry").innerHTML = jsonData.country;
		}
  };
	
	xhttp.open("GET", '../js/data.json', true);
	xhttp.send();
}