<?php
session_start();   
 // include 'config.php';
$mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$pin = $_POST["pin"];
	$email = $_POST["email"];
	$pwd = $_POST["pwd"];
	 $doc = ['FirstName' => $fname,
              'LastName' => $lname,
              'Address'=> $address,
              'City'=> $city,
              'Pin'=> $pin,
              'Email' => $email,
              'Password' => $pwd,
            ];
	// $_SESSION['fname'] = $firstname;
    $qry=new MongoDB\Driver\Query(['Email'=>$email]);
    $rows=$mongo->executeQuery("esports.registration",$qry);
    $v="";
    foreach($rows as $row){
       $v=$row->FirstName;
   
    }
    if($v==""){
        $bulk->insert($doc);
        $mongo->executeBulkWrite('esports.registration', $bulk);
        header("Location: login.php");
    }
    else{
        echo "<script>if(confirm('Your Record has already been registered.Now Login')){document.location.href='login.php'};</script>";        
        //header("Location: register.html");
       // echo"Your email is already registered";
    }
}
else{
    echo "no data inserted...";
	header("Location: register.php");
}
	/* if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
		echo 'Data inserted';
		echo '<br/>'; */    
	// session_session();   

	 /*$email=$_POST["email"];
	 $pwd=$_POST["pwd"];*/
	 // 'email'=>$email,'password'=>$password

?>
