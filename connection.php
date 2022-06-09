$mysqli=new mysqli('localhost','root','','users');

		if($mysqli->connect_error){
					echo $mysqli->connect_error;
				}