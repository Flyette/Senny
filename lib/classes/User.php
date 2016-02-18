<?php 

class User extends Model{
	protected $table = 'users';
	public function all() {
		return $this->db->where('archive',0)->find_many();
	}
	public function archived() {
		return $this->db->where('archive',1)->find_many();
	}
	public function get($id){
		return $this->db->find_one($id);
	}
	public function add($data){
		$u = $this->db->create();
		$u->set($data);
		$u->save();
	}

}
