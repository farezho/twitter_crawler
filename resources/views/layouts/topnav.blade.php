<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Let's Crawl!</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- navbar css -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/navbar.css')}}">

	<!-- main style -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">	

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:500" rel="stylesheet">
</head>
<body>
	<!-- Shrink navbar -->
	<div class="header">
		<h2>Let's crawl the tweets!</h2>
	</div>

	<div id="navbar">
		<a href="{{ url('/') }}">Home</a>
		<a href="{{ route('crawlkeyword') }}">Crawling by Keyword</a>
		<a href="{{ route('crawluser') }}">Crawling by User</a>
		<a href="{{ route('hometimeline') }}">Home Timeline</a>
	</div>

	<div class="container">
		@yield("content")
	</div>
</body>

<!-- navbar js -->
<script type="text/javascript">
	// When the user scrolls the page, execute myFunction 
	window.onscroll = function() {myFunction()};

	// Get the navbar
	var navbar = document.getElementById("navbar");

	// Get the offset position of the navbar
	var sticky = navbar.offsetTop;

	// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
	function myFunction() {
	  if (window.pageYOffset >= sticky) {
	    navbar.classList.add("sticky")
	  } else {
	    navbar.classList.remove("sticky");
	  }
	}
</script>

</html>