<?php $this->layout('template', ['title' => 'Users index']); ?>

<h1>Archive</h1>
<p>Hello, <?=$this->e($name)?></p>
<table class="ui celled table">
		<tr>
			<thead>
				<th>ID</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Tel</th>
				<th>Code Postal</th>
				<th>Ville</th>
				<th>Site</th>
				<th>Mail</th>
				<th>Entreprise</th>
				<th>Editer</th>
				<th>Desarchiver</th>
				<th>Supprimer</th>

			</thead>
		</tr>
	<?php 
		$users = new User();
		foreach($users->archived() as $u):
	?>	
		<tr>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->id ?></a></td>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->nom ?></a></td>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->prenom ?></a></td>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->tel ?></a></td>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->code_postal ?></a></td>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->ville ?></a></td>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->site ?></a></td>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->mail ?></a></td>
			<td><a href="<?= url('users/showArchive', $u->id) ?>"><?php echo $u->entreprise ?></a></td>
			<td><a href="<?= url('users/edit', $u->id) ?>" class="ui button icon" title="Editer l'utilisateur"><i class="icon edit"></i></a></td>
			<td><a href="<?= url('users/archive', $u->id, 'desarchive') ?>" class="ui blue button icon" title="Desarchiver l'utilisateur"><i class="icon archive"></i></a></td>
			<td><a href="<?= url('users/archive', $u->id, 'deleteUser') ?>" class="ui red button icon" title="Supprimer l'utilisateur"><i class="icon delete"></i></a></td>
		</tr>

	<?php endforeach ; ?>
</table>
