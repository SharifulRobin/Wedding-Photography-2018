<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	
			<?php
				mysql_connect('localhost','root','root');
				mysql_select_db('testb');
				
				$name = $_POST['user_name'];
				$email = $_POST['user_email'];
				
				$sql = "insert into user (user_name,user_email) value('$name','$email')";
				
				if(mysql_query($sql))
				{
					echo "Save Successfully";
				}
				 else{
					echo mysql_error();
				}
	
			?>
	
	
	
</body>
</html>