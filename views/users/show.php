<?php
$this->layout('template', ['title' => 'Users index']); 

$user = new User();
$u = $user->get($_GET['id']);
?>

<h2><?= $u->prenom ?> <?= $u->nom ?></h2>

<div class="ui list">
	<div class="item header ui">Adresse :</div>
	<div class="item"><?= $u->adresse ?></div>
	<div class="item"> <?= $u->code_postal ?> <?= $u->ville ?></div>
	<div class="item"><i class="icon phone"></i> <?= $u->tel ?></div>
	<div class="item"><i class="icon globe"></i> <?= $u->site ?></div>
	<div class="item"><i class="icon building"></i> <?= $u->entreprise ?></div>
	<div class="item"><i class="icon at"></i> <?= $u->mail ?></div>
</div>

<?php 
$message = new Message;
$messages = $message->getAllMsgs($_GET['id']);

foreach ($messages as $msg) : ?>

<p class="ui segment attached"><span class="datetime"><?= Helper::humanDate($msg->created_at) ?></span><br><?= $msg->content ?></p>

<?php endforeach; ?>
</br>
<form action="<?= Helper::url('users/show', $u->id, 'createMsg'); ?>" class="ui form" method="post">
	<input type="hidden" name="user_id" value="<?= $u->id ?>">
	<textarea name="content" id=""></textarea><br><br>
	<button class="ui blue button">Ajouter message</button>
</form>

<div class="ui menu">
	<a href="<?= url('users/edit', $u->id) ?>" class="item">Editer</a>
	<a href="<?= url('users/archive', $u->id, 'archive') ?>" class="item">Archiver</a>
	<a href="<?= url('users/index', $u->id, 'deleteUser') ?>" class="item">Supprimer</a>
</div>
