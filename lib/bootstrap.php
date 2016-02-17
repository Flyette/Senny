<?php

require BASE . "vendor/autoload.php";
require BASE . "lib/classes/Model.php";
require BASE . "lib/classes/User.php";
require "router.php";

function config(){
	return require BASE . 'lib/config.php';
}

new router;
