function autenticaLogin() {
  let data = new FormData()
  data.append('email', document.login.email.value)
  data.append('senha', document.login.senha.value)

  let xhttp = new XMLHttpRequest()
  xhttp.open("POST", '../backend/autenticate.php');

  xhttp.onload = function() {
    
		if (xhttp.status == 200) {
      let responseJson = JSON.parse(this.response)
      if(responseJson.status) {
        window.location.href = "../area-logada/index.php";
      } else {
        document.getElementById("feedback").innerHTML = responseJson.msg
      }
		} else {
      console.log(this.response)
    }
    
  }

  xhttp.send(data)
  return false
}