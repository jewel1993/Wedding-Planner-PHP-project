<?php
    session_start();
	session_destroy();
	//setcookie(PHPSESSID,session_id(),time()-1);
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
?>			

