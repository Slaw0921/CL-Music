<?php
	$connect = new mysqli("localhost", "root", "", "cl-music");
	
			if($connect->connect_errno )
			{
				die('could not connect: ' . $connect->connect_errno);
			}
?>
<?php
//	$connect = mysql_connect ("localhost", "root", "");
	//mysql_select_db("c", $connect);
?>