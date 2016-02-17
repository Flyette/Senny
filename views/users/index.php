<?php

$this->layout('template', ['title' => 'Users index']);
?>
<h1>User Profile</h1>
<p>Hello, <?=$this->e($name)?></p>
<ul>
<?php 
	$users = new User();
	foreach($users->all() as $u):
 ?>
	<li><?php echo $u['nom'] ?></li>
<?php endforeach ; ?>
</ul>
