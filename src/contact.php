<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loopback</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/mobile-style.css">
</head>

<body>
<header>
	<div class="container-fluid p-0">
		<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="index.php">Loopback</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	<div class="mr-auto"></div>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link">Project</a>
        <div class="dropdown-content">
            <a href="booster.php">Booster</a>
            <a href="crm.php">CRM</a>
            <a href="hrm.php">HRM</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="team.php">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
	</div>
    
    <div class="container text-center">
        <div class="row">
        	<div class="col-md-7 col-sm-12">
        		<h1>Contact Us</h1>            
        	</div>
            <div class="col-md-5 col-sm-12 h-25">
        		<img src="../image/contact-us.png" alt="booster">
        	</div>	       
        </div>
    </div>
</header>

<main>
	<section class="section-4">
		<div class="container text-left">
			<div class="row">
				<div class="col-md-6">
					
                    <h2>Loopback</h2><br>
                    <p>
                    58/9, Free School Street <br>
                    Panthabath, Dhaka-1205.<br>
                    Mobile: 01773893339<br>
                    Email: imran_bof@live.com<br>
                    </p>
				</div>
				<div class="col-md-6">
					
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.987159657923!2d90.38853521429682!3d23.747837294792646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bc589843ab%3A0x340289c39fd7c643!2s58%2C+9+Free+School+St%2C+Dhaka+1205!5e0!3m2!1sen!2sbd!4v1557827285325!5m2!1sen!2sbd" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>

	
</main>
<footer>
	<div class="container-fluid   p-0">
		<div class="row text-left">
			<div class="col-md-5">
				<h1 class="text-light">About Us</h1>
				<p class="text-muted">We are loopback team</p>
				<p class="col-md-5 text-muted">
				<?php
					function copyright($start_year){
					$current_year = date('Y');
					if($start_year<$current_year){
							$current_year = date('y');
							return "&copy; $start_year&ndash; $current_year";
					}else{
							return "&copy; $start_year";
					}
					}
					echo copyright(2018)."</br>";
					?>
					<span>Daily Tuition</span>
				</p>
			</div>
			<div class="col-md-4">
				<h4 class="text-light">Newsletter</h4>
				<p class="text-muted">News letter read</p>
				<form class="form-inline">
					<div class="input-group pr-5">
						<input type="text" class="form-control bg-dark text-white" placeholder="Email">
						<div class="input-group-prepared">
							<div class="input-group-text">
								<i class="fas fa-arrow-right"></i>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-3 col-sm-12">
				<h4 class="text-light">Follow Us</h4>
				<p class="text-muted">Let us be social</p>
				<div class="column">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-youtube"></i>
				</div>
			</div>
		</div>
	</div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>