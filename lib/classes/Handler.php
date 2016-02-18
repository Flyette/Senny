<?php

class Handler {
	public function __construct(){

	}
	public function editUser(){
		$u = new User;
		$user = $u->get($_GET['id']);
		$user->set($_POST);
		$user->save();
	}
	public function addUser(){
		$u = new User;
		$user = $u->add($_POST);
	}
	public function archive(){
		$u = new User;
		$user = $u->get($_GET['id']);
		$user->archive = 1;
		$user->save();
	}
	public function desarchive(){
		$u = new User;
		$user = $u->get($_GET['id']);
		$user->archive = 0;
		$user->save();
	}
	public function createMsg(){
		$msg = new Message;
		$message = $msg->addMsg($_POST);
	}

	public function deleteUser(){
		$u = new User;
		$user = $u->get($_GET['id']);
		$user->delete();
	}
}