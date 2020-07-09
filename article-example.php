//This code comes from my article : https://kr0wz.github.io/fr/2020/07/09/php-type-juggling.html

<?php

if(isset($_GET['username']) && isset($_GET['password'])){
	if($_GET['username'] == TRUE && $_GET['username'] == md5($_GET['password'])){
		echo "Welcome MASTER !";
	}
	else {
		echo "Sorry wrong credentials";
	}
}
else {
	echo "You must specify both username and password in URL ...";
}

?>
