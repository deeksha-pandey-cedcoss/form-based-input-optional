<h1>The input element</h1>

<form action="#" method="post">
  <label for="age">Age:</label>
  <input type="number" id="age" name="age"><br><br>
  <label for="weight">Weight:</label>
  <input type="number" id="weight" name="weight"><br><br>
  <input type="submit" value="Submit">
</form>
<?php
print_r($_POST);

if (($_POST['age'] >= 5 && $_POST['age'] <= 7) && ($_POST['weight'] >= 15 && $_POST['weight'] <= 20)) {
  echo "<h2>You are Fit</h2>";
}
if (($_POST['age'] >= 8 && $_POST['age'] <= 10) && ($_POST['weight'] >= 21 && $_POST['weight'] <= 25)) {
  echo "<h2>You are Fit</h2>";
}
if (($_POST['age'] >= 11 && $_POST['age'] <= 15) && ($_POST['weight'] >= 26 && $_POST['weight'] <= 30)) {
  echo "<h2>You are Fit</h2>";
}
if (($_POST['age'] >= 16 && $_POST['age'] <= 20) && ($_POST['weight'] >= 31 && $_POST['weight'] <= 40)) {
  echo "<h2>You are Fit</h2>";
}
else {
  echo "<h2>You are not fit</h2>";
}
?>
