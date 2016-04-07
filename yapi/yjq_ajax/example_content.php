<?php
$page = $_GET['yid'];
switch($page)
 {
		case "1":
		echo '<h2>page 1</h2>Content goes here <br/>';
		break;				  
		case "2":
		echo '<h2>page 2</h2>Content goes here <br/>';
		break;
		case "3": 
		echo '<h2>page 3</h2>Content goes here <br/>';
		break;
		case "4": default:
		echo '<h2>page 4</h2>Content goes here <br/>';
		break;
}
?>