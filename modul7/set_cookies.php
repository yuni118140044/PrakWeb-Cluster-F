<?php 
$cookie_name ="user";
$cookie_value ="Praktikum PAWB";
setcookie($cookie_name, $cookie_value, time()+(86400 * 30), "/");

 ?>

 <!DOCTYPE html>
 <html>
 <body>
 	<?php 
 	if(!isset($_COOKIE[$cookie_name])){
 		echo "Cookie '".$cookie_name."'tidak diset!";
 	}
 	else{
 		echo "Cookie '".$cookie_name."'sudah diset!<br>";
 		echo "nilainya adalah :".$_COOKIE[$cookie_name];
 	} ?>
 </body>
 </html>