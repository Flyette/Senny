<?php

class Helper {

	public static function config() {
		return require BASE . 'lib/config.php';
	}

	public static function url($page, $id=false, $action=false){
		//http://senny.dev/?page=users-show&id=1&action=archive
		$page = str_replace("/", "-", $page);
		$domain = config()['url'];
		$url = $domain . "page=" . $page;
		if($id){
			$url .= "&id=" . $id;
		}
		if($action) {
			$url .= "&action=" . $action;
		}
		return $url;
	}
	public static function field($name, $value=null, $label=false, $type='text'){
		if(!$label) {
			$label = str_replace('_', ' ', $label);
			$label = ucfirst($name);
		}
		$id = "xxx-" . $name;
		return '<div class="item">
					<label for="'. $id .'">' . $label . '</label>
					<input type="' . $type . '" name="'. $name .'" id="'. $id .'" value="' . $value . '">
				</div>';
	}
}

function config() {
	return Helper::config();
}
function url($page, $id=false, $action=false){
	return Helper::url($page, $id, $action);
}