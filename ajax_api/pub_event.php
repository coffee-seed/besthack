<?php
	include_once('../functions/ajax_api.php');
	if(isset($_GET['pub'])){
		echo pub_event($_GET['pub']);
	}
?> 
