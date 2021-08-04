<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<style>
	#Div2 {
		display: none;
	}

	.form-control {
		border: 1px solid rgba(0, 0, 0, .15) !important;
	}
</style>

<body class="animsition">

	<!-- Header -->
	<div class="wrap_header">
		<!-- Logo -->
		<a href="index.html" class="logo">
			<img src="images/icons/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="product.php">All Products</a>
					</li>
					<li>
						<a href="product.php?category=Cakes">Cakes</a>
					</li>

					<li>
						<a href="product.php?category=Greeting Cards">Greeting cards</a>
					</li>


					<li>
						<a href="product.php?category=Frames">Frames</a>
					</li>

					<li>
						<a href="product.php?category=Mugs">Mugs</a>
					</li>

					<li>
						<a href="product.php?category=Flowers">Flowers</a>
					</li>

					<li>
						<a href="login.php">Logout</a>
					</li>
				</ul>
			</nav>
		</div>

		<!-- Header Icon -->
		<div class="header-icons">
			<a href="#" class="header-wrapicon1 dis-block">
				<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">

			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<span class="header-icons-noti">0</span>


			</div>
		</div>
	</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap_header_mobile">
		<!-- Logo moblie -->
		<a href="index.html" class="logo-mobile">
			<img src="images/icons/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Button show menu -->
		<div class="btn-show-menu">
			<!-- Header Icon mobile -->
			<div class="header-icons-mobile">
				<a href="#" class="header-wrapicon1 dis-block">
					<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
				</a>

				<span class="linedivide2"></span>

				<div class="header-wrapicon2">
					<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<span class="header-icons-noti">0</span>


				</div>
			</div>


		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap_header_mobile">
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>
	</div>

	<!-- Menu Mobile -->
	<div class="wrap-side-menu">
		<nav class="side-menu">
			<ul class="main-menu">
				<li class="item-menu-mobile">
					<a href="index.html">Home</a>
				</li>

				<li class="item-menu-mobile">
					<a href="product.html">cakes</a>
				</li>

				<li class="item-menu-mobile">
					<a href="product.html">Greeting cards</a>
				</li>

				<li class="item-menu-mobile">
					<a href="cart.html">Frames</a>
				</li>

				<li class="item-menu-mobile">
					<a href="blog.html">Mugs</a>
				</li>

				<li class="item-menu-mobile">
					<a href="about.html">Flowers</a>
				</li>

				<li class="item-menu-mobile">
					<a href="contact.html">Logout</a>
				</li>
			</ul>
		</nav>
	</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/login.jpg);">
		<h2 class="l-text2 t-center">
			MY ACCOUNT
		</h2>
	</section>
	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-4 col-lg-4 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->

						<ul class="p-b-54">

							<li class="p-t-4">
								<a href="profile.php" class="s-text13 active1">
									Profile
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									Orders
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 p-b-50" id="Div1">
					<?php
					$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
					$options = [];                                            // (2)
					$filter = ['_id' => new MongoDB\BSON\ObjectID($_SESSION["auth"])];
					$qry = new MongoDB\Driver\Query($filter, $options);
					$rows = $mng->executeQuery("m4u.user", $qry);

					foreach ($rows as $row) {


						?>
						<img src="images/myacc.png" width="120px" height="120px" alt="IMG-PRODUCT"><br><br>
						<i data-v-513ae1f2="" class="fa fa-user"></i>&emsp;
						<?php echo $row->name ?>
						<br><br>
						<i data-v-513ae1f2="" class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;
						<?php echo $row->email ?>
						<br><br>
						<i data-v-513ae1f2="" class="fa fa-user"></i>&emsp;
						<?php echo $row->mobileno ?>
						<br><br>
						<button name="update1" class="btn btn-outline-danger" value="Click" onclick="myFunction()"><i data-v-513ae1f2="" class="fa fa-pencil"></i>Update Profile</button>
					<?php } ?>
				</div>
				<div class="col-sm-9 col-md-4 col-lg-4 p-b-50" id="Div2">

					<div class="card border-dark mb-3" style="max-width: 18rem;">
						<div class="card-header">Edit Profile</div>
						<div class="card-body text-dark">
							<form action="profileupdate.php" method="POST">
								<label for="exampleInputname">Name</label>
								<input type="text" class="form-control" name="name" value="<?php echo $row->name ?>">
								<label for="exampleInputphone">Email</label>
								<input type="email" class="form-control" name="email" value="<?php echo $row->email ?>">
								<label for="exampleInputphone">Mobile number</label>
								<input type="text" class="form-control" name="mobileno" value="<?php echo $row->mobileno ?>"><br>
								<button name="update2" class="btn btn-outline-danger"><i data-v-513ae1f2="" class="fa fa-pencil"></i>Update Profile</button>
							</form>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title">
								Contact Us
							</h3><br>
							<ul class="address_line">
								<li>+91 9496017923</li>
								<li><a href="#">made4u@gmail.Com</a></li>
								<li>www.made4u.com</li>
							</ul><br>
							<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
								<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
								<script>
									(function() {
										var setting = {
											"height": 150,
											"width": 150,
											"zoom": 17,
											"queryString": "Kristu Jayanti College, Autonomous, P..O, Hennur Main Road, K.Narayanapura, Kothanur, Bengaluru, Karnataka, India",
											"place_id": "ChIJfdp5jFcXrjsRji-YK47Nbek",
											"satellite": false,
											"centerCoord": [13.062937046873996, 77.64567944332771],
											"cid": "0xe96dcd8e2b982f8e",
											"lang": "en",
											"cityUrl": "/india/bangalore",
											"cityAnchorText": "Map of Bangalore, South Kerala, India",
											"id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
											"embed_id": "189674"
										};
										var d = document;
										var s = d.createElement('script');
										s.src =
											'https://embedgooglemap.1map.com/js/script-for-user.js?embed_id=189674';
										s.async = true;
										s.onload = function(e) {
											window.OneMap.initMap(setting)
										};
										var to = d.getElementsByTagName('script')[0];
										to.parentNode.insertBefore(s, to);
									})();
								</script><a href="https://embedgooglemap.1map.com?embed_id=189674">1 Map</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title">
								Gift Collection
							</h3><br>
							<ul class="links">
								<li>Frames</li>
								<li>Greeting cards </li>
								<li>Mugs</li>
								<li>Bottle Art</li>

						</div>
					</div>
					<div class="col-xl-3  col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title">
								Quick Link
							</h3><br>
							<ul class="links">
								<li><a href="#home">Home</a></li>
								<li><a href="#aboutus">About Us</a></li>
								<li><a href="#">Login</a></li>
								<li><a href="#contactus">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-3 ">
						<div class="footer_widget">
							<div class="footer_logo">
								<a href="#">
									<img src="images/icons/logo.png" alt="">
								</a>
							</div><br>
							<p class="address_text">P..O, Hennur Main Rd, K.Narayanapura, Kothanur, Bengaluru, Karnataka 560077
							</p>
							<div class="socail_links">
								<ul>
									<li>
										<a href="#">
											<i class="ti-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="ti-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="ti-email"></i>
										</a>
									</li>

								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [50, 200],
			connect: true,
			range: {
				'min': 50,
				'max': 200
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function(values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
<script>
	function myFunction() {
		var x = document.getElementById("Div2");
		if (x.style.display === "none") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
	}
</script>

</html>