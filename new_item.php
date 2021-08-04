<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["Email"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

 /* if($_SESSION["type"]=="admin") 
{
  header("location:admin.php");
} */

include 'config.php';

?>
<?php 
if(isset($_POST['upload']))
{

    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $bulk = new MongoDB\Driver\BulkWrite;
         
    // $email=$_SESSION['Email'];
    $prod_id=$_POST['prod_id'];
    $pdesc=$_POST['pdesc'];
    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $image=$_FILES['file_1'];
    // print_r($image);
    
    $doc=array(
        // "productid"=>$uniqueId= time().'-'.mt_rand(),
        "ProductID"=>$prod_id,
        "ProductName"=>$pname,
        "ProductPrice"=>$pprice,
        "ProductDescription"=>$pdesc,
        "ProductImage"=>new MongoDB\BSON\Binary(file_get_contents($image["tmp_name"]), MongoDB\BSON\Binary::TYPE_GENERIC)
    );
    //print_r($doc);
    $bulk->insert($doc);
    $mng->executeBulkWrite('esports.products', $bulk);
    if($mng){
        echo "<script>alert('Successfully uploaded');</script>";
       
    }
    else{
        echo "<script>alert('sorry something went wrong!');</script>";
    }
}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Account ||  eSports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">eSports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="all_orders.php">Orders</a></li>
          <li><a href="new_item.php">Add New Item</a></li>
          <?php

          if(isset($_SESSION['Email'])){
            // echo '<li class="active"><a href="new_item.php">Add New Item</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p><?php echo '<h3>Hi ' . $_SESSION["Email"] .'</h3>'; ?></p>

        <p><h4>Add New Items</h4></p>

      </div>
    </div>


    <form method="POST" action="new_item.php" enctype="multipart/form-data" style="margin-top:30px;">
      <div class="row">
        <div class="small-12">

          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Product ID</label>
            </div>
            <div class="small-8 columns end">

                  <input type="text" id="right-label" placeholder="Enter product ID" required name="prod_id">

                  </div>
                  </div>

                  <div class="row">
                  <div class="small-3 columns">
                  <label for="right-label" class="right inline">Product Name</label>
                  </div>
                  <div class="small-8 columns end">

                  <input type="text" id="right-label"  placeholder="Enter Name" required name="pname">

                  </div>
                  </div>

                  <div class="row">
                  <div class="small-3 columns">
                  <label for="right-label" class="right inline">Product Price</label>
                  </div>
                  <div class="small-8 columns end">
                  <input type="text" id="right-label"  placeholder="Enter Price" required name="pprice">



                  </div>
                  </div>

                  <div class="row">
                  <div class="small-3 columns">
                  <label for="right-label" class="right inline">Product Description</label>
                  </div>
                  <div class="small-8 columns end">
                  <input type="text" id="right-label"  placeholder="Enter Description" required name="pdesc">
                  </div>
                  </div>

                  <div class="row">
                  <div class="small-3 columns">
                  <label for="right-label" class="right inline">Product Image</label>
                  </div>
                  
                  <div class="small-8 columns end">
                  <input type="file" name="file_1" id="file_1" id="right-label" placeholder="Upload Image" required/>
                  </div>
                  </div>

                  <!-- <div class="row">
                  <div class="small-3 columns">
                  <label for="right-label" class="right inline">Email</label>
                  </div>

                  <div class="small-8 columns end">


                  <input type="email" id="right-label" placeholder="Enter Email" required name="email">

                  </div>
                  </div>



              <div class="row">
              <div class="small-3 columns">
              <label for="right-label" class="right inline">Password</label>
              </div>
              <div class="small-8 columns end">
              <input type="password" id="right-label" required placeholder="Enter Password" name="pwd">

              </div>
              </div> -->

          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" name="upload" id="right-label" value="Add Item" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>



    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; eSports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
