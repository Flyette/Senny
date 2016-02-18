<?php 
class Message extends Model {
	protected $table = 'messages';

	public function getAllMsgs($id){
		return $this->db->where('user_id', $id)->find_many();
	}
	public function addMsg($data){
		$msg = $this->db->create();
		$msg->set($data);
		$msg->save();
	}
}