<?php

class router {

	private $template;
	private $homepage = 'home'; 

	public function __construct(){
		$this->template = BASE . "views";
		if (isset($_GET["action"])) {
			$this->post($_GET['action']);
		}
		if(isset($_GET["page"])){
			return $this->get($_GET["page"]);
		}
	}
	public function get($page){
		$page = str_replace("-", "/", $page);
		$this->makeView($page);
		// return require BASE . "views/" . $page . ".php";
	}
	public function post($action){
		$h = new Handler;
		$h->$action();
	}
	public function makeView($page){
		$templates = new League\Plates\Engine($this->template);
		echo $templates->render($page, ['name'=> 'dkqhflfmagic']);
	}
}