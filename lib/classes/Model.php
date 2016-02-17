<?php

class Model {
	protected $table;
	protected $db;
	protected $config;

	public function __construct(){
		$this->config = config();
		$this->connect();
		$this->db = ORM::for_table($this->table);
	}
	protected function connect(){
		ORM::configure('mysql:host=' . $this->config["db"]["host"] . ";dbname=" . $this->config["db"]["dbname"]);
		ORM::configure('username', $this->config["db"]["username"]);
		ORM::configure('password', $this->config["db"]["password"]);
		ORM::configure('error_mode', PDO::ERRMODE_WARNING);
	}
}