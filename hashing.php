<?php
//hashing.php
//Evans Jahja <evans.jahja@yahoo.com>
//Fungsi-fungsi untuk hashing

/*
OLD Salt function
function generateSalt()
{
	return sha1(mcrypt_create_iv(1024, MCRYPT_DEV_URANDOM));
}
*/
function generateHash($salt,$pass)
{
	return sha1(sha1($pass.$salt).$salt);
}
function generateSalt()
{
	$max=40;
	$characterList="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$i=0;
	$salt="";
	while($i<$max)
	{
		$salt.=$characterList{mt_rand(0,strlen($characterList)-1)};
		$i++;
	}
	return $salt;
}
	//print(generateSalt2());
?>