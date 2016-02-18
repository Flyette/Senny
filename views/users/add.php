<?php 

$this->layout('template', ['title' => 'Add user']); 

?>
<h1>Nouvel utilisateur</h1>
<form action="<?= Helper::url('users/index', false, 'addUser'); ?>" class="ui form" method="post">
	<?= Helper::field('nom', null); ?>
	<?= Helper::field('prenom', null); ?>
	<?= Helper::field('tel', null, 'Téléphone'); ?>
	<?= Helper::field('code_postal', null, 'Code Postal'); ?>
	<?= Helper::field('ville', null); ?>
	<?= Helper::field('site', null); ?>
	<?= Helper::field('entreprise', null); ?>
	<?= Helper::field('mail', null, 'Mail', 'mail'); ?>
	<div>
		<button class="ui blue button">Ajouter</button>
	</div>
</form>