<?php
	require('partials/header.php');
?>
	
	<ul>
	<?php foreach($users as $user) : ?>
		<li><?= $user->name; ?>	
	<?php endforeach; ?>
	</ul>

	<h1>Submit Your Name</h1>

	<form method="POST" action="/users">
	  <div class="form-group">
	    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

<?php 
	require('partials/footer.php');
?>