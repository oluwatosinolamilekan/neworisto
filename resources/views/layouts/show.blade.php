<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oristo Universal</title>
	

	<!-- STYLESHEETS-->
	{{--  <link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css">  --}}
	<link href="{{ asset('libraries/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- CUSTOM STYLES -->
	{{--  <link rel="stylesheet" type="text/css" href="assets/css/main.css">  --}}
	<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
	{{--  <link rel="stylesheet" type="text/css" href="assets/css/index.css">  --}}
	<link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
	{{--  <link rel="stylesheet" type="text/css" href="assets/css/checkbox.css">  --}}
	<link href="{{ asset('assets/css/checkbox.css') }}" rel="stylesheet">
	{{--  <link rel="stylesheet" type="text/css" href="assets/css/style4.css">  --}}
	<link href="{{ asset('assets/css/style4.css') }}" rel="stylesheet">

	<!-- WEBFONT -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">

	<!-- ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="">
	<!-- scroll top -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		<img src="assets/img/oil.svg" class="width-40">
	</button>


	<ul class="cb-slideshow">
        <li class="li"><span>Image 01</span></li>
        <li class="li"><span>Image 02</span></li>
        <li class="li"><span>Image 03</span></li>
        <li class="li"><span>Image 04</span></li>
        <li class="li"><span>Image 05</span></li>
        <li class="li"><span>Image 06</span></li>
    </ul>

	{{--  @include(oristo.navbar)  --}}

	<section class="">
		@yield('content')
	</section>

	<footer class="bg-liter">
		
		<div class="container m-t-5p">
			<p class="text-center"> &copy;Copyright 2012&nbsp;  &bull;All Right Reserved&nbsp;  &bull;Oristo Universal Company&nbsp; &reg; 93 Obafemi Awolowo Way Ikeja Lagos 100001&nbsp; &bull; P.O. Box 2870</p>
		</div>
	</footer>
	
	
	
	
	{{--  <script type="text/javascript" src="libraries/bootstrap/js/jquery-3.1.1.min.js"></script>  --}}
    <script src="{{ asset('libraries/bootstrap/js/jquery-3.1.1.min.js') }}" defer></script>

	{{--  <script src="libraries/bootstrap/js/bootstrap.min.js"></script>  --}}
    <script src="{{ asset('libraries/bootstrap/js/bootstrap.min.js') }}" defer></script>
	
    <!-- background sliding -->
	{{--  <script type="text/javascript" src="libraries/bootstrap/js/modernizr.custom.86080.js"></script>  --}}
    <script src="{{ asset('libraries/bootstrap/js/modernizr.custom.86080.js') }}" defer></script>
</body>
	
    <script type="text/javascript">
    	// change navbar background color when scroll downs

		$(document).ready(function(){
		  $(window).scroll(function(){
		  	var scroll = $(window).scrollTop();
			  if (scroll > 100) {
			    $(".change").css("background" , "#fffffff2");
			    $(".change").css("color" , "black");
			  }

			  else{
				  $(".change").css("background" , "transparent");
				  $(".change").css("color" , "");  	
			  }
		  })
		})
		

	</script>

    <!-- scroll -->
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		        document.getElementById("myBtn").style.display = "block";
		    } else {
		        document.getElementById("myBtn").style.display = "none";
		    }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		}
	</script>
</html>