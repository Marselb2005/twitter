<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTMTMTT</title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
		<form action="change.php" method="POST " >
			<input type="hidden" name="text" value="$marsel['text']">
			<input type=hidden"" name="id" value="$marsel['id']">
			<button>Редактировать</button>
		</form>
</body>
</html>
<?php 
$connect =  mysqli_connect('127.0.0.1','root','','marsel_pn_10'); 
$query =mysqli_query( $connect,"UPDATE tweet SET text='привет как дИла'  WHERE id='5'");
 ?>