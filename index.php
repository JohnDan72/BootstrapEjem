<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
	<!--link rel="stylesheet" type="text/css" href="css/index.css"-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
	<!--link rel="stylesheet" type="text/css" href="css/bootstrap/mdb.min.css"-->
	<!--link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-reboot.css"-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
	<!--Navbar Section-->
	<nav class="navbar navbar-expand-md navbar-dark bg-transparent fixed-top" id="myNavBar">
	  	<a class="navbar-brand" href="#">
	    	<img class="navbar-brand text-white d-flex justify-content-sm-center" src="https://img.pngio.com/images-and-videos-amazoncom-inc-press-room-amazon-prime-logo-png-4000_2286.png" width="55px" height="35px">
	    </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		  	<i class="material-icons">menu</i>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			    <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			    </li>
			    <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Dropdown
			        </a>
			        <div class="dropdown-menu text-center text-sm-center text-md-left text-lg-left" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="row">
			          	<div class="col-10 offset-1">
			          		<div class="dropdown-divider"></div>
			          	</div>
			          </div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			        
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#">Disabled</a>
			    </li>
		    </ul>
		    
		    <form class="form-inline my-2 my-lg-0">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		</div>
	</nav>


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <div  id="imgRes1"  style="height: 500px" ></div>
	      <div class="carousel-caption d-block">
		    <h4>Construye</h4>
		    <p>Arma algo nuevo</p>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <div  id="imgRes2"  style="height: 500px" ></div>
	      <div class="carousel-caption d-block">
		    <h4>Imagina</h4>
		    <p>Piensa el lo mejor del mundo</p>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <div  id="imgRes3"  style="height: 500px" ></div>
	      <div class="carousel-caption d-block">
		    <h4>Aplica</h4>
		    <p>Pon en marcha eso que tanto quieres</p>
		  </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-12 text-center">
				<h4>Características</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4 features">
				<div class="d-flex flex-row justify-content-center alig-items-center">
					<i class="material-icons iconFeature">beach_access</i>
				</div>	
					
				<div class="row titleFeature">
					<h5>Rendimiento</h5>
				</div>
				<div class="row">
					<p class="text-justify">Este es el primer párrafo de prueba para la carecterística número uno</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 features">
				<div class="d-flex flex-row justify-content-center alig-items-center">
					<i class="material-icons iconFeature">brightness_medium</i>
				</div>	
					
				<div class="row titleFeature">
					<h5>Energia total</h5>
				</div>
				<div class="row">
					<p class="text-justify">Este es el primer párrafo de prueba para la carecterística número uno</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 features">
				<div class="d-flex flex-row justify-content-center alig-items-center">
					<i class="material-icons iconFeature">account_balance</i>
				</div>	
					
				<div class="row titleFeature">
					<h5>Aumento</h5>
				</div>
				<div class="row">
					<p class="text-justify">Este es el primer párrafo de prueba para la carecterística número uno</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 features">
				<div class="d-flex flex-row justify-content-center alig-items-center">
					<i class="material-icons iconFeature">add_a_photo</i>
				</div>	
					
				<div class="row titleFeature">
					<h5>Aumento</h5>
				</div>
				<div class="row">
					<p class="text-justify">Este es el primer párrafo de prueba para la carecterística número uno</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 features">
				<div class="d-flex flex-row justify-content-center alig-items-center">
					<i class="material-icons iconFeature">all_inclusive</i>
				</div>	
					
				<div class="row titleFeature">
					<h5>Aumento</h5>
				</div>
				<div class="row">
					<p class="text-justify">Este es el primer párrafo de prueba para la carecterística número uno</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 features">
				<div class="d-flex flex-row justify-content-center alig-items-center">
					<i class="material-icons iconFeature">album</i>
				</div>	
					
				<div class="row titleFeature">
					<h5>Aumento</h5>
				</div>
				<div class="row">
					<p class="text-justify">Este es el primer párrafo de prueba para la carecterística número uno</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top: 50px;">
		<div class="d-flex flex-row justify-content-center alig-items-center">
			<h4 style="color: var(--grey-darken-2);">Y esto es parte de nuestras imágenes</h4>
		</div>
		<div class="row" style="margin-top: 30px;">
			<div class="col-12 col-md-6">
					<div id="imgContent1"  style="height: 300px"></div>
					<div id="imgContent2"  style="height: 275px; margin-top: 25px;"></div>
			</div>
			<div class="col-12 col-md-6" media="(max-width: 576px)">
					<div id="imgContent3"  style="height: 600px"></div>
			</div>

			<div class="col-12" style="margin-top: 25px;">
					<div id="imgContent4"  style="height: 400px"></div>
			</div>
		</div>
	</div>

	<div class="myParallax row align-items-center" style="margin-top: 50px; height: 400px;">
		<div class="col align-self-center">
			<h2 class="text-center" style="color: var(--grey-lighten-2)">Ve ahora y crea lo que quieras!</h2>
		</div>
	</div>


	<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script-->
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<!--script src="js/bootstrap/mdb.min.js"></script-->

	<script type="text/javascript">
		$('.carousel').carousel({
		  interval: 5000,
		  keyboard: true
		});
		$('.dropdown-toggle').dropdown({
			flip: true
		});

		

		window.addEventListener('scroll', function (event) {
			// Set starting position
			var scroll = this.scrollY;
			if (scroll<50) {
				document.getElementById('myNavBar').classList.remove('bg-scroll');
				document.getElementById('myNavBar').classList.add('bg-transparent');
			}
			else{
				document.getElementById('myNavBar').classList.add('bg-scroll');
				document.getElementById('myNavBar').classList.remove('bg-transparent');
			}

		}, false);
	</script>
</body>
</html>