<?php 

class User extends Model{
	protected $table = 'users';
	public function all() {
		return $this->db->find_many();
	}
	public function get($id){

	}
	public function add(){

	}
	public function edit(){

	}
	public function remove($id){

	}
}