<?php
namespace Mathcourt;

class Vote{
	public $id;
	public $cookie;
	public $question;
	public $value;

	public function cast(){
		$Vote = \RedBeanPHP\R::dispense('vote');
		$Vote->cookie = $this->cookie;
		$Vote->question = $this->question;
		$Vote->value = $this->value;
		$this->id = \RedBeanPHP\R::store($Vote);

	}

	public function fetch(){
		$Vote = \RedBeanPHP\R::findOne('vote', 'cookie = ? and question = ?', [$this->cookie, $this->question]);
		$this->id = $Vote->id ?? '0';
		$this->value = $Vote->value ?? '0';
	}

	public function stats(){
		$guilty = \RedBeanPHP\R::count( 'vote', ' value = "guilty" and question = ? ', [ $this->question ] );
		$innocent = \RedBeanPHP\R::count( 'vote', ' value = "innocent" and question = ? ', [ $this->question ] );
		$doesntknow = \RedBeanPHP\R::count( 'vote', ' value = "doesntknow" and question = ? ', [ $this->question ] );
		return ['guilty' => $guilty, 'innocent' => $innocent, 'doesntknow' => $doesntknow];
	}
}