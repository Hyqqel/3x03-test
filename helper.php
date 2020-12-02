// Helper function

<?php

// Hash password
function hashPassword($password) {
    sha1($password);
}

// Encrypt message
function encryptmsg($msg) {
	openssl_public_encrypt($i, $e, $k, OPENSSL_PKCS1_PADDING);
	mcrypt_encrypt($msg);
}
?>
