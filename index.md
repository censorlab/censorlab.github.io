<!DOCTYPE html>
<html>
<body>
<script>
function validateAge() {
  var x = document.forms["myForm"]["age"].value;
  x = parseInt(x)
  if (x < 7) {
    alert("לא ניתן להמשיך בניסוי.");
    return false;
  } else {
  return true 
  }
}
</script>
</head>
<body dir="rtl">
<h2><br>בכדי להשתתף בניסוי, יש להקפיד על שינה של לפחות 7 שעות בלילה הקודם למפגש.</h2>
<form name="myForm" action="/action_page.php" onsubmit="return validateAge()" method="post">
  <strong> מספר השעות אשר ישנת בלילה האחרון:</strong> <br><br> <input type="text" name="age"> <br><br>
  <input type="submit" value="אישור">
</form>

</body>
</html>
