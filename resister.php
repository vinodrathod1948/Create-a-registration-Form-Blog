include('connection.php');

 $error=array();

 $username=$_POST['username']; 

$email=$_POST['email'];
 
$password=$_POST['password'];

 if($username=='')

{ 
$error[]="username field is required"; 
}

 if($email=='')

{
 $error[]="Email field is required";
 }

 if($password=='')
{ 
$error[]="Password field is required";
 }

 $count=count($error);
 
if($count>0)
{
foreach($error as $value)
{ 
echo $value."
"; 
} 
}
 $mysqli->query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')"); 

if($mysqli->error)
{ echo $mysqli->error; 
}

else{ 
echo "
SUCCESSFULLY REGISTERED

"; }
 }