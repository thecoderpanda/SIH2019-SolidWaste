<?php 

// include_once 'default-header.php';

?>
<p>Admin login</p>
<section class="main-container">
	<div class="main-wrapper">
		<form class="login-form" action="../includes/admin-login.inc.php" method="POST">
			<input type="text" name="uid" placeholder="Username">
			<input type="Password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Login</button>
		</form>


	</div>
</section>

<?php 

// include_once 'default-footer.php';

?>