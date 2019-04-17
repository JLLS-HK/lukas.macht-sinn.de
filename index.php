<?php
$to = "lukas.harfich@gmail.com";
$subject = "Just some testing...";
$txt = "Hello world!";
$headers = "From: Idk@Idk.com"; 

mail($to,$subject,$txt,$headers);
setcookie("CookieName");
if(isset($_POST['font_size'], $_POST['font_color'])) {
    setcookie('font_size', $_POST['font_color']);
    setcookie('font_size', $_POST['font_color']);
    $msg = '<h3>Your settings have been entered! Click <a href="view_settings.php">here</a> to see them in action.</h3>';
}
?>
<html>
<head>
<title>Hi, this is PHP!</title>
<meta http-equiv="refresh" content="5">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:#ffefdb;">
<h1>This is made by PHP(Hypertext Preprocessor)</h1>
<?php
ini_set('display_errors', 1);
$number1 = rand(1, 15);
$number2 = rand(1, 15);
$number3 = rand(1, 15);
echo "<h2>Your lucky numbers are(from 1 to 15):<br />
$number1<br />
$number2<br />
$number3</h2>";

if(isset($msg)) {
    echo $msg;
}
?>
<form action="settings.php" method="post">
<select name="font_size">
<option value="">Font Size</option>
<option value="xx-small">xx-small</option>
<option value="x-small">x-small</option>
<option value="small">small</option>
<option value="medium">medium</option>
<option value="large">large<option>
<option value="x-large">x-large</option>
<option value="xx-large">xx-large</option>
</select>
<select name="font_color">
<option value="">Font Color</option>
<option value="999">Gray</option>
<option value="0c0">Green</option>
<option value="00f">Blue</option>
<option value="c00">Red</option>
<option value="000">Black</option>
</select>
<input type="submit" name="submit" title="Work in Progress!" value="Set My Preferences" disabled>
</input>
</form>
<h3>Click here to say hello.<ul>
<li><a href="hello.php?stuff=Luke">Luke</a></li>
<li><a href="hello.php?stuff=Michael">Micheal</a></li></ul>
<h3>Enter your email address here to let me send an email to you!</h3>
<form action="index2.php" method="post">
<input type="text" name="email" title="Write your Email here!" placeholder="Work in Progress!" value="" readonly></input>
<p><input type="submit" name="submit" title="Submit" value="Submit" disabled></input></p>
</form>
</body>
</html>
