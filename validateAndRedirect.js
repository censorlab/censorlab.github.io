function validateAndRedirect() {
    var age = parseInt(document.forms["myForm"]["age"].value);

    if (age < 7) {
      alert("לא ניתן להמשיך בניסוי.");
    }
    else {      
      const urlParams = new URLSearchParams(window.location.search);
      window.location.href = "https://run.pavlovia.org/CensorLab/" + urlParams.get("experiment") + "/html";
    }
  }