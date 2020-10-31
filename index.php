<?php
include "AESEncryptDecrypt.php";

// Como usar las funciones para encriptar y desencriptar.

$aes = new AESEncryptDecrypt();
$data = "q";
$en = $aes->encrypt($data);
$des = $aes->decrypt($en);
echo 'Dato encriptado: '. $en . '<br>';
echo 'Dato desencriptado: '. $des . '<br>';
?>