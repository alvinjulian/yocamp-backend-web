<?php
//connection.php
//Alvin Julian <alvin.julian@outlook.com
//Handle koneksi mariadb

if($_POST['server_auth']=='YoYoCampusBackEndSuperSecretPassword')
{
	$mysqli=mysqli_connect("localhost","yocampco_myUser","YoCampSQL123","yocampco_db") or die("Cannot Connect.");
}
else
{
	die('ERROR: invalid server authentication!');
}

?>