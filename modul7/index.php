<?php 
session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP login Authentication</title>
 </head>
 <body>
 	<h1>PHP LOGIN</h1>
 	<h3><span>Login</span></h3>
 	<form method="post" action="login.php">
 		<div>
 			<input type="text" name="username" placeholder="Username.." autofocus required></div>
 			<div>
 			<input type="password" name="password" placeholder="password.." required>
 		</div>
 		<button type="submit" name="login"><span></span>Login</button>
 	</form>

 <?php 
 if(isset($_SESSION['message'])){
 	?>
 	<div>
 		<?= $_SESSION['message'];?>	
 	</div>
<?php unset($_SESSION['message']); 
}
 ?>
 
 </body>
 </html>