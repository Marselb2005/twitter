<?php 
		$connect =  mysqli_connect('127.0.0.1','root','','marsel_pn_10'); 
		$query = mysqli_query($connect , "DELETE FROM tweet WHERE id = '" . $_POST['id'] . "'");
	 ?>