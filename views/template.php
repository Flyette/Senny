<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$this->e($title)?></title>
	<link rel="stylesheet" type="text/css" href="/css/semantic.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
	<div class="ui menu">
		<a href="<?= url("users/index") ?>" class="item">Index</a>
		<a href="<?= url("users/add") ?>" class="item">Add user</a>
		<a href="<?= url("users/archive") ?>" class="item">Archive</a>
	</div>
	<div class="ui container">
	<?=$this->section("content")?>
	</div>
<script type="text/javascript" src="/js/jquery.js"></script>	
<script type="text/javascript" src="/js/app.js"></script>	
</body>
</html>