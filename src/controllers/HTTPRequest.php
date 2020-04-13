<?php

namespace Mathcourt;

class HTTPRequest{
	public function __construct($URI){
		$Routes = explode('/', substr($URI, 1));
		$this->route($Routes);
	}
	private function route($Routes){
		$Config = json_decode(file_get_contents('config.json'));
		switch ($Routes[0]) {
			case '/':
			case '':
				include __DIR__.'/../views/frontpage.php';
				break;
			case 'zakljucak':
				include __DIR__.'/../views/zakljucak.php';
				break;
			case 'noanalytics':
				setcookie('mathcourt_noanalytics', 'true', strtotime('+1 year'), '/');
				header('Location: '.$Config->trimpath.'/predmet/medicinska-sestra');
				break;
			case 'predmet':
				if($Routes[1] == 'medicinska-sestra') include __DIR__.'/../views/medicinska-sestra.php';
				elseif($Routes[1] == 'dobro-dosla-moja-bivsa') include __DIR__.'/../views/dobro-dosla-moja-bivsa.php';
				elseif($Routes[1] == 'kradljivci') include __DIR__.'/../views/kradljivci.php';
				break;
			case 'glasaj':
					if($Routes[1] != 'medicinska-sestra' && $Routes[1] != 'dobro-dosla-moja-bivsa' && $Routes[1] != 'kradljivci') die('Ups, dogodila se greška');
					if($Routes[2] != 'guilty' && $Routes[2] != 'innocent' && $Routes[2] != 'doesntknow') die('Ups, dogodila se greška');
					$Vote = new Vote;
					$Vote->cookie = $_COOKIE['mathcourt_cookie'];
					$Vote->question = $Routes[1];
					$Vote->fetch();
					if($Vote->id) die('Čini se da pokušavaš dvaput glasati, ali to ne možeš.');
					$Vote->value = $Routes[2];
					$Vote->cast();
					header('Location: '.$Config->trimpath.'/predmet/'.$Routes[1]);
				break;
			default:
				header('Location: '.$Config->trimpath);
				break;
		}
	}
}
