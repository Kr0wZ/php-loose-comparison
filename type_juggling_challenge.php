<?php

if(isset($_GET['username']) && isset($_GET['password'])){
	if(strrev($_GET['username']) == 0 && $_GET['password'] == hash("sha256", $_GET['password']) && $_GET['password'] != FALSE){
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