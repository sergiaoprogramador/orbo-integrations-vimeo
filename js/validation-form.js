// Display Error
function printError(elemId, errorMsg) {
  document.getElementById(elemId).innerHTML = errorMsg;
}

// Validation Form
function validateFormInscrever() {
  // Value elemnets 
  let email = document.inscrever.email.value;
  let confirmEmail = document.inscrever.confirmEmail.value;
  let senha = document.inscrever.senha.value;
  let displayname = document.inscrever.displayname.value;
  

  //  nascimento  
  let day = document.inscrever.day.value;
  let month = document.inscrever.month.value;
  let year = document.inscrever.year.value;
  let birthday = `${day}/${month}/${year}`
  //  nascimento

  let gender = document.inscrever.gender.value;
  let shareData = document.inscrever.shareData.value;
  let termsConditions = document.getElementsByName('termsConditionsEmail');
  let termsCondition;
  for (termsCondition of termsConditions) {
    if (termsCondition.checked) {
      termsCondition.value = 1
      break
    }
    termsCondition.value = 0
  }

  let emailErr = confirmEmailErr = senhaErr = displaynameErr = birthdayErr = genderErr = termsConditionsErr = true;

  // Validate email
  if(email == "") {
    printError("emailErr", "Por favor, insira seu email corretamente");
  } else {
    // Expressão regular RGEX
    let regex = /^\S+@\S+\.\S+$/;

    if(regex.test(email) === false) {
        printError("emailErr", "Por favor, insira seu email corretamente");
    } else{
        printError("emailErr", "");
        emailErr = false;
    }

  }

  // Validate Confirm email
  if(confirmEmail == "") {
    printError("confirmEmailErr", "Por favor, repita o e-mail igual o anterior");
  } else {

    if(confirmEmail !== email ) {
        printError("confirmEmailErr", "Por favor, repita o e-mail igual o anterior");
    } else{
        printError("confirmEmailErr", "");
        confirmEmailErr = false;
    }

  }

  // Validate senha
  if(senha == "") {
    printError("senhaErr", "Por favor, insira uma senha forte");
    
  } else {
    // Expressão regular RGEX.
    let regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/;

    if(regex.test(senha) === false) {
        printError("senhaErr", "A senha deve conter: 8 Caracteres no mínimo, 1 Letra Maícuscula no mínimo, 1 Letra mínuscula no mínimo, 1 Número no mínimo, 1 Símbolo no mínimo: $*&@#");
    } else{
        printError("senhaErr", "");
        senhaErr = false;
    }
  }

  //   Validate nickname
  if(displayname == "") {
    printError("displaynameErr", "Por favor, insira como devemos te chamar");
    
  } else {
    printError("displaynameErr", "");
    displaynameErr = false;
  }

  // Validate date birthday
  if(birthday == "") {
    printError("birthdayErr", "Por favor, insira uma data de nascimento");
    
  } else {
    // Expressão regular RGEX.
    let regex = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;

    if(regex.test(birthday) === false) {
        printError("birthdayErr", "Por favor, insira umda data de nascimento corretamente");
    } else{
        printError("birthdayErr", "");
        birthdayErr = false;
    }
  }

  // Validate gender
  if(gender == "") {
    printError("genderErr", "Por favor, insira uma resposta para o genêro");
  } else {
    printError("genderErr", "");
    genderErr = false;
  }

  // Validate termsConditions
  if(termsCondition.value == 0) {
    printError("termsConditionsErr", "Por favor, para prosseguir é necessário concordar com os termos e condições");
  } else {

    printError("termsConditionsErr", "");
    termsConditionsErr = false;
  }

//   emailErr = confirmEmailErr = senhaErr = displaynameErr = dayErr = yearErr = birthdayErr = genderErr = shareDataErr = termsConditionsErr

  // Impedir que o formulário seja enviado se houver algum erro
  if((emailErr || confirmEmailErr || senhaErr || displaynameErr || birthdayErr || genderErr || termsConditionsErr) == true) {
      return false;
  }  else {
    
  }

}

function validateFormLogin() {
  // Value elemnets 
  let email = document.login.email.value;
  let senha = document.login.senha.value;

  let emailErr = senhaErr = true;

  // Validate email
  if(email == "") {
    printError("emailErr", "Por favor, insira seu email");
  } else {
    // Expressão regular RGEX
    let regex = /^\S+@\S+\.\S+$/;

    if(regex.test(email) === false) {
        printError("emailErr", "Por favor, insira seu email corretamente");
    } else{
        printError("emailErr", "");
        emailErr = false;
    }

  }

  // Validate senha
  if(senha == "") {
    printError("senhaErr", "Por favor, insira sua senha");
    
  } else {
    // Expressão regular RGEX.
    let regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/;

    if(regex.test(senha) === false) {
        printError("senhaErr", "Está faltando algo, a senha deve ter: 8 Caracteres no mínimo, 1 Letra Maícuscula no mínimo, 1 Letra mínuscula no mínimo, 1 Número no mínimo, 1 Símbolo no mínimo: $*&@#");
    } else{
        printError("senhaErr", "");
        senhaErr = false;
    }
  }

  // Impedir que o formulário seja enviado se houver algum erro
  if((emailErr || senhaErr) == true) {
        return false;
  }  else {
    
    autenticaLogin(email, senha);
  }

  return false
}