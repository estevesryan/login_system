<?php
session_start();
include('verifica-login.php');
?>

<h2>Welcome, 
	<?php
	echo $_SESSION['user']
	?>
</h2>

<a href="logout.php">
	<button>Log Out</button>
</a>