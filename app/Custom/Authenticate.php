<?php 

namespace App\Custom;

define('METHOD','AES-256-CBC');
define('SECRET_KEY','$suntic2024');
define('SECRET_IV','101712');

class Authenticate 
{	
	/**
	 * encryption
	 *
	 * @param  mixed $string
	 * @return void
	 */
	public static function encryption($string){
		$output=FALSE;
		$key=hash('sha256', SECRET_KEY);
		$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
		$output=base64_encode($output);
		return $output;
	}	
	/**
	 * decryption
	 *
	 * @param  mixed $string
	 * @return void
	 */
	public static function decryption($string){
		$key=hash('sha256', SECRET_KEY);
		$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
		return $output;
	}
}