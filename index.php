<form action="example.php" method="POST">
<p>Aktivacijos kodas: <input type="text" name="input_value">
<input type="submit" name="submit" value="Aktivuoti!">
<?php
if (isset($_POST['submit']))
{
//Nuo čia turėtu buti vykdomas kodas*
$form_value = $_POST['input_value'];
http_redirect("server/check.php", array("key" => "$formvalue"), true, HTTP_REDIRECT_PERM);
}
?>
