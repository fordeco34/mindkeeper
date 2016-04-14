<?php

class User
{
	public $name;
	public $email;
	public $password;

	public function User() {
		
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPassword(){
		return $this->password;
	}
}