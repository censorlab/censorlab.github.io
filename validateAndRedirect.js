function validateAndRedirect() {
    var age = parseInt(document.forms["myForm"]["age"].value);

    if (age < 7) {
      alert("לא ניתן להמשיך בניסוי.");

      return false;
    }
    else {      
      const urlParams = new URLSearchParams(window.location.search);
      window.location.href = "https://run.pavlovia.org/sa/" + urlParams.get("experiment") + "/html/?__pilotToken=" + urlParams.get("__pilotToken") + "&__oauthToken=" + urlParams.get("__oauthToken");
      return true;
    }
  }