<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="/assets//img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Education</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{asset('/assets/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/mystyles.css')}}">
</head>

<body>
	<header id="header" id="home" >
		<div class="header-top" >
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			
					</div> 
					<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
						<a href="tel:+23480 5473 6194"><span class="lnr lnr-phone-handset"></span> <span class="text">+23480 5473 6194</span></a>
						<a href="tel:+23490 2005 9676"><span class="lnr lnr-phone-handset"></span> <span class="text">+23490 2005 9676</span></a>
						<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">alhalal@gmail.com</span></a>			
					</div>
				</div>			  					
			</div>
	  </div>
	  <div class="container main-menu">
		  <div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
			  <a href="/"><img src="/assets/img//logo.png" alt="Al Halal Seeds Academy" title="Al Halal Seeds Academy" style="width: 6em"  /></a>
	  
			</div>
			@include('includes.navbar')
		  </div>
	  </div>
	</header><!-- #header -->



	
	@yield('content')



	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>About us</h4>
						<p>Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Quick links</h4>
						<ul>
							<li><a href="#">Admission</a></li>
							<li><a href="#">Application form</a></li>
							<li><a href="#">Tuition and Payment</a></li>
							<li><a href="#">Curriculum</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li><a href="#">Condusive Enviroment for Learning</a></li>
							<li><a href="#">Hifsul Quran Classes</a></li>
							<li><a href="#"> Arabic and French Speaking</a></li>
							<li><a href="#">Guidance and Counselling Services</a></li>
							<li><a href="#">ICT and Science Laboratories</a></li>
							<li><a href="#">Library</a></li>
							<li><a href="#">Qualified Seasoned and Dedicated Teaching Staff</a></li>
						</ul>
					</div>

				</div>
			</div>
			<div class="footer-bottom row align-items-center justify-content-between">
				<p class="footer-text m-0 col-lg-6 col-md-12">
					Al Halal Seed Academy Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved
				</p>
				<div class="col-lg-6 col-sm-12 ">
					<p class="footer-text m-0 col-lg-6 col-md-12 float-right"> Site Developed by Taotech</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	<!-- End footer Area -->


	<script src="{{asset('/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
<script src="{{asset('/assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{asset('/assets/js/easing.min.js')}}"></script>
	<script src="{{asset('/assets/js/hoverIntent.js')}}"></script>
	<script src="{{asset('/assets/js/superfish.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.tabs.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/assets/js/mail-script.js')}}"></script>
	<script src="{{asset('/assets/js/main.js')}}"></script>
</body>

</html>