<?php

namespace Mathcourt;

class Cookie{
	public $value;

	public function __construct(){
	
		if(isset($_COOKIE['mathcourt_cookie'])){
			$this->value = $_COOKIE['mathcourt_cookie'];
		}
		else{
			$this->value = bin2hex(openssl_random_pseudo_bytes(32));
			setcookie('mathcourt_cookie', $this->value, strtotime('+1 year'), '/');
		}
	}
}