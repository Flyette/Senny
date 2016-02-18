<?php 

$this->layout('template', ['title' => 'Edit user']); 

$user = new User();
$u = $user->get($_GET['id']);

?>
<h1>Editer un utilisateur</h1>
<form action="<?= Helper::url('users/show', $u->id, 'editUser'); ?>" class="ui form" method="post">
	<?= Helper::field('nom', $u->nom); ?>
	<?= Helper::field('prenom', $u->prenom); ?>
	<?= Helper::field('tel', $u->tel, 'Téléphone'); ?>
	<?= Helper::field('code_postal', $u->code_postal, 'Code Postal'); ?>
	<?= Helper::field('ville', $u->ville); ?>
	<?= Helper::field('site', $u->site); ?>
	<?= Helper::field('entreprise', $u->entreprise); ?>
	<?= Helper::field('mail', $u->mail); ?>
	<div>
		<button class="ui blue button">Modifier</button>
	</div>

</form>