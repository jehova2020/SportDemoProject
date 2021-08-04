<?php
// including the database connection file
// include_once("config.php");
session_start();
$mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
$qry=new MongoDB\Driver\Query([]);
$rows=$mongo->executeQuery("esports.registration",$qry);
if(isset($_POST['update']))
{    
    $id = $_SESSION['Email'];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$pin = $_POST["pin"];
	$pwd = $_POST["pwd"];
	$bulk = new MongoDB\Driver\BulkWrite;
                $bulk->update(
                ['Email' => $id],
                ['$set' => ['FirstName' => $fname,
                'LastName' => $lname,
                'Address' => $address,
				'City' => $city,
				'Pin'=> $pin,
				'Password' => $pwd]],
                ['multi' => false, 'upsert' => false]
                
                
                );
                $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
                $result = $manager->executeBulkWrite('esports.registration', $bulk,$writeConcern);
                if($result){
                    
                    echo '<script>alert("Dear User,\nYour Details are Updated!");</script>'; 
                    header("Location:products.php");
                }
                else
                {
                    echo '<script>alert("Dear User,\nSorry something went wrong!\nTry after sometime.")</script>';
                }


} // end if $_POST
?>
<!-- <html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="update_details.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html> -->