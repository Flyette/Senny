<?php $this->layout('template', ['title' => 'Users index']); ?>

<h1>User Profile</h1>
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
				<th>Action</th>
			</thead>
		</tr>
	<?php 
		$users = new User();
		foreach($users->all() as $u):
	?>	
		<tr>
			<td><a href="<?= url('users/show', $u->id) ?>"><?php echo $u->id ?></a></td>
			<td><a href="<?= url('users/show', $u->id) ?>"><?php echo $u->nom ?></a></td>
			<td><a href="<?= url('users/show', $u->id) ?>"><?php echo $u->prenom ?></a></td>
			<td><a href="<?= url('users/show', $u->id) ?>"><?php echo $u->tel ?></a></td>
			<td><a href="<?= url('users/show', $u->id) ?>"><?php echo $u->code_postal ?></a></td>
			<td><a href="<?= url('users/show', $u->id) ?>"><?php echo $u->ville ?></a></td>
			<td><a href="<?= url('users/show', $u->id) ?>"><?php echo $u->site ?></a></td>
			<td><a href="<?= url('users/edit', $u->id) ?>" class="ui button icon" title="Editer l'utilisateur"><i class="icon edit"></i></a></td>
		</tr>

	<?php endforeach ; ?>
</table>
