<?php

session_start();  
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
    
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
	 $email=$_POST["email"];
	 $pwd=$_POST["pwd"];
	 // $flag = 'true';
	 // 'email'=>$email,'password'=>$password
	 $mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
	 $qry=new MongoDB\Driver\Query([]);
	 $rows=$mongo->executeQuery("esports.registration",$qry);
	 
	 foreach($rows as $row)
	 {
		if($email==$row->Email && $pwd==$row->Password)
		{
			$_SESSION['Email']=$email;
			echo $_SESSION['Email'];
			
			echo " <script>alert('Logged in Successfully');</script> ";
			header("Location: products.php");
		}

	 }
	  //echo "<script>if(confirm('Invalid credentials. Check Again')){document.location.href='login.php'};</script>";
	  redirect();
}


function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 1; url=index.php");
}

/* include 'config.php';


$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT id,email,password,fname,type from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password) {

      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;
      header("location:index.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
} */
?>
