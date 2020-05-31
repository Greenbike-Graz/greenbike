//check form befor submit

function validateForm() {
  var vorname = document.forms["form"]["vorname"].value;
  var nachname = document.forms["form"]["nachname"].value;
  var adresse = document.forms["form"]["adresse"].value;
  var plz = document.forms["form"]["plz"].value;
  var ort = document.forms["form"]["ort"].value;
  var email = document.forms["form"]["email"].value;
  var telefon = document.forms["form"]["telefon"].value;
  var checkBox = document.getElementById("dsgvo");

  if (vorname == "") {
    alert("Bitte geben Sie den Vornamen an");
    document.getElementById("inputVorname").focus();
    return false;
  }
  if (nachname == "") {
    alert("Bitte geben Sie den Nachnamen an");
    document.getElementById("inputNachname").focus();
    return false;
  }

  if (adresse == "") {
    alert("Bitte geben Sie die Adresse an");
    document.getElementById("inputAdresse").focus();
    return false;
  }
  if (plz == "") {
    alert("Bitte geben Sie die PLZ an");
    document.getElementById("inputPlz").focus();
    return false;
  }

  if (ort == "") {
    alert("Bitte geben Sie den Ort an");
    document.getElementById("inputOrt").focus();
    return false;
  }

  if (telefon == "") {
    alert(" Bitte geben Sie Ihre Telefonnummer an");
    document.getElementById("inputTelefon").focus();
    return false;
  }

  if (email == "") {
    alert(" Bitte geben Sie die Email an");
    document.getElementById("email").focus();
    return false;
  }

  if(checkBox.checked == false){
    alert("Bitte stimmen Sie den AGBs zu")
    return false;
  }

  else{
    mail_url = 'mailto:office@greenbike.at?Subject=' + 'Anfrage' + '&Body=' + $('#exampleFormControlTextarea1').val() + '%0D%0A' + '%0D%0A' +$('#inputVorname').val() + '%0D%0A' + $('#inputNachname').val() + '%0D%0A' + $('#inputAdresse').val() + '%0D%0A' + $('#inputPlz').val() + '%0D%0A' + $('#inputOrt').val() + '%0D%0A' + $('#inputTelefon').val() + '%0D%0A' + $('#email').val()
    window.location = mail_url
    return true;
  }
}



