<?php
setlocale(LC_TIME, 'fr_FR.utf8');

require BASE . "vendor/autoload.php";
use Carbon\Carbon;
require BASE . "lib/classes/Helper.php";
require BASE . "lib/classes/Model.php";
require BASE . "lib/classes/User.php";
require BASE . "lib/classes/Handler.php";
require BASE . "lib/classes/Message.php";
require "router.php";

new router;

$dt = Carbon::now();
$date = $dt->formatLocalized('%A %d %B %Y'); 
echo ucfirst($date);