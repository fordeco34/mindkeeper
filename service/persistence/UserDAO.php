<?php

class UserDAO
{

	public function UserDAO() {
		
	}


 	public function getByEmail($email){
		$user = new User();
		$user->setName("Isan");
		$user->setEmail("I@I.com");
		$user->setPassword("Teresina");

		return $user;
	}
}