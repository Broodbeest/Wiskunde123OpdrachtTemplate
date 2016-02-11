<!DOCTYPE html>
<html lang="nl">

	<head>
		
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">
			
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/stylesheet.css">

			<!-- Mathjax -->
			<script type="text/x-mathjax-config">
			  MathJax.Hub.Config({
			    extensions: ["tex2jax.js"],
			    jax: ["input/TeX", "output/HTML-CSS"],
			    tex2jax: {
			      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
			      displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
			      processEscapes: true
			    },
			    "HTML-CSS": { availableFonts: ["TeX"] }
			  });
			</script>
			<script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_HTMLorMML-full"></script>
			

			
			<!-- algemene jquery blblitheek op google -->
			<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
			
			<!-- Bootstrap -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			
			<!-- Charts.js -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
			
			<!-- highcharts -->
			<script src="http://code.highcharts.com/highcharts.js"></script>
			<script src="http://code.highcharts.com/modules/exporting.js"></script>

	</head>

	<body>	
	
	
	
	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
							<a href="index.html">Wiskunde</a>
							<a href="index_leerjaar.php?p=leerjaar_1_1516" style="color:#F84753;" class="zonderruimte">1</a>
							<a href="index_leerjaar.php?p=leerjaar_2_1516" style="color:#F6E934;" class="zonderruimte">2</a>
							<a href="index_leerjaar.php?p=leerjaar_3_1516" style="color:#4750F9;" class="zonderruimte">3</a>
							cursus '15-'16 
					</div>
					<div class="navbar-brand">
							<?php echo $taaknaam; ?>
							
						</div>
				</div>
				
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="http://www.wiskundebeest.nl/wiskunde123bootstrap/#">Home</a></li>
								<hr>
								<li><a href="#open_doelen">Doelen</a></li>
								<li><a href="#open_voorkennis">Voorkennis</a></li>
								<li><a href="#open_werkwijze">Werkwijze</a></li>
								<li><a href="#open_benodigdheden">Benodigheden</a></li>
								<hr>
								<li><a href="index_leerjaar.php?p=leerjaar_1_1516">Leerjaar <span style="color:#F84753;">1</span></a></li>
								<li><a href="index_leerjaar.php?p=leerjaar_2_1516">Leerjaar <span style="color:#F6E934;">2</span></a></li>
								<li><a href="index_leerjaar.php?p=leerjaar_3_1516">Leerjaar <span style="color:#4750F9;">3</span></a></li>
							</ul>
						</li>
					</ul>	
				</div>
			</div>
		</nav>  
  <div class="container">