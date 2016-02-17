<?php

class router{
	private $template;
	private $homepage = 'home'; 
	public function __construct(){
		$this->template = BASE . "views";
		if(isset($_GET["page"])){
			return $this->get($_GET["page"]);
		}
		if (isset($_GET["action"])) {
			return $this->post();
		}
	}
	public function get($page){
		$page = str_replace("-", "/", $page);
		$this->makeView($page);
		// return require BASE . "views/" . $page . ".php";
	}
	public function post(){
		echo "post";
	}
	public function makeView($page){
		$templates = new League\Plates\Engine($this->template);
		echo $templates->render($page, ['name'=> 'dkqhflfmagic']);
	}

}