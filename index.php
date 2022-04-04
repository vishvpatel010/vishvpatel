<?php
session_start();
include 'dbcon.php';
if(isset($_SESSION['status']))
{
	echo $_SESSION['status'];
	session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		<?php
			$result = mysqli_query($connect,"SELECT *FROM `web_heading` WHERE `id` = '1'");
			$row = mysqli_fetch_array($result);
			echo $row['title'];
		?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Vishv</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
					<li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
					<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
					<!-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li> -->
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
					<?php
								$result1 = mysqli_query($connect,"SELECT *FROM `header` WHERE `id` = '1'");
								while($row1 = mysqli_fetch_array($result1))
								{
							?>
						<div class="one-third order-md-last img" style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['bg_photo']); ?>);">
							<div class="overlay"></div>
							<div class="overlay-1"></div>
						</div>
						<?php } ?>
						<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hello! I am Vishv Patel</span>
								<h1 class="mb-4 mt-3">Software Developer</h1>
								<p><a href="CV.pdf" class="btn btn-primary btn-outline-primary" download>Download CV</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last img" style="background-image:url(images/bg_2.jpg);">
							<div class="overlay"></div>
							<div class="overlay-1"></div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">We Design &amp; Build Brands</span>
								<h1 class="mb-4 mt-3">Hi, I am <span>Clyde</span> This is my favorite work.</h1>
								<p><a href="#" class="btn btn-primary">Hire me</a> <a href="#" class="btn btn-primary btn-outline-primary">Download CV</a></p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>

	<section class="ftco-counter img bg-light" id="section-counter">
		<div class="container">
			<div class="row justify-content-center">
			<?php
				$result2 = mysqli_query($connect, "SELECT *FROM `counter`");
				while($row2 = mysqli_fetch_array($result2))
				{
			?>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="<?php echo $row2['icon']; ?>"></span>
						</div>
						<div class="text">
							<strong class="number"><?php echo $row2['number']; ?></strong>
							<span><?php echo $row2['title']; ?></span>
						</div>
					</div>
				</div>
				<?php  } ?>
			</div>
		</div>
	</section>

	<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<?php
							$result3 = mysqli_query($connect, "SELECT *FROM `about_me` WHERE `id` = '1'");
							while($row3 = mysqli_fetch_array($result3))
							{
						?>
						<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row3['image']); ?>);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">My Intro</span>
								<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Me</h2>
								<p><?php echo $row3['intro']; } ?></p>
								<?php
									$result4 = mysqli_query($connect, "SELECT *FROM `about` WHERE `id` = '1'");
									while($row4 = mysqli_fetch_array($result4))
									{
								?>
								<ul class="about-info mt-4 px-md-0 px-2">
									<li class="d-flex"><span>Name:</span> <span><?php echo $row4['name']; ?></span></li>
									<li class="d-flex"><span>Date of birth:</span> <span><?php echo $row4['dob']; ?></span></li>
									<li class="d-flex"><span>Address:</span> <span><?php echo $row4['address']; ?></span></li>
									<!-- <li class="d-flex"><span>Zip code:</span> <span>1000</span></li> -->
									<li class="d-flex"><span>Email:</span> <span><a href="mailto:<?php echo $row4['email']; ?>"><?php echo $row4['email']; ?></a></span></li>
									<li class="d-flex"><span>Phone: </span> <span><a href="tel:+91<?php echo $row4['phone']; ?>">+91 <?php echo $row4['phone']; ?></a></span></li>
								</ul>
								<?php } ?>
							</div>
							<div class="col-md-12">
								<div class="my-interest d-lg-flex w-100">
								<?php
									$result4 = mysqli_query($connect, "SELECT *FROM `about_me_interest`");
									while($row4 = mysqli_fetch_array($result4))
									{
								?>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="<?php echo $row4['icon']; ?>"></span>
										</div>
										<div class="text"><?php echo $row4['title']; ?></div>
									</div>
									<?php  } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section bg-light" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Skills</span>
					<h2 class="mb-4">My Skills</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
				</div>
			</div>
			<div class="row progress-circle mb-5 justify-content-center">
			<?php
				$result5 = mysqli_query($connect, "SELECT *FROM `skill`");
				while($row5 = mysqli_fetch_array($result5))
				{
			?>
				<div class="col-lg-4 mb-4">
					<div class="bg-white rounded-lg shadow p-4">
						<h2 class="h5 font-weight-bold text-center mb-4"><?php echo $row5['title']; ?></h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='<?php echo $row5['per']; ?>'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold"><?php echo $row5['per']; ?><sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->
					</div>
				</div>
				<?php } ?>
				
				
			</div>
		</div>
	</section>

	<section class="ftco-section" id="services-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">I am grat at</span>
					<h2 class="mb-4">We do awesome services for our clients</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
				</div>
			</div>

			<div class="row">
				<?php
				$result6 = mysqli_query($connect, "SELECT *FROM `service`");
				while($row6 = mysqli_fetch_array($result6))
				{
				?>
				<div class="col-md-6 col-lg-4">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center"><span class="<?php echo $row6['icon']; ?>"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3"><?php echo $row6['title']; ?></h3>
							<p><?php echo $row6['intro']; ?></p>
						</div>
					</div> 
				</div>
					<?php } ?>
			</div>

		</div>
	</section>

	<!-- <section class="ftco-hireme">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-8 col-lg-8 d-flex align-items-center">
					<div class="w-100 py-4">
						<h2>Have a project on your mind.</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly.</p>
						<p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Contact me</a></p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 d-flex align-items-end">
					<img src="images/author.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section> -->

	<section class="ftco-section ftco-project" id="projects-section">
		<div class="container-fluid px-md-4">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Accomplishments</span>
					<h2 class="mb-4">Work</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
				</div>
			</div>
			<div class="row justify-content-center">
				<?php
					$result7 = mysqli_query($connect, "SELECT *FROM `project`");
					while($row7 = mysqli_fetch_array($result7))
					{
				?>
				<div class="col-md-3">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row7['image']); ?>);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="<?php echo $row7['link']; ?>" target="_BLANK"><?php echo $row7['title']; ?></a></h3>
							<span><?php echo $row7['technology']; ?></span>
						</div>
					</div>
				</div>
<?php } ?>
			</div>
		</div>
	</section>

	<!-- <section class="ftco-section testimony-section bg-primary">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
					<span class="subheading">Testimonies</span>
					<h2 class="mb-4">What client says about?</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->


	<!-- <section class="ftco-section bg-light" id="blog-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Blog</span>
					<h2 class="mb-4">Our Blog</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<span class="mr-2">July 03, 2020</span>
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
							<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<span class="mr-2">July 03, 2020</span>
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
							<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<span class="mr-2">July 03, 2020</span>
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
							<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<!-- <span class="subheading">Contact us</span> -->
					<h2 class="mb-4">Contact Us</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
				</div>
			</div>

			<div class="row block-9">
				<div class="col-md-8">
					<form action="contact.php" class="bg-light p-4 p-md-5 contact-form" method="POST">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Your Name" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Your Email" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" name="subject" placeholder="Subject" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message" required></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
								</div>
							</div>
						</div>
					</form>
					
				</div>

				<div class="col-md-4 d-flex pl-md-5">
					<div class="row">
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa-solid fa-location-dot"></span>
							</div>
							<?php
								$result8 = mysqli_query($connect, "SELECT *FROM `about` WHERE `id` = '1'");
								while($row8 = mysqli_fetch_array($result8))
								{
							?>
							<div class="text">
								<p><span>Address:</span> <?php echo $row8['address']; ?></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa-solid fa-phone"></span>
							</div>
							<div class="text">
								<p><span>Phone:</span> <a href="tel:+91<?php echo $row8['phone']; ?>">+91 <?php echo $row8['phone']; ?></a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa-solid fa-paper-plane"></span>
							</div>
							<div class="text">
								<p><span>Email:</span> <a href="mailto:<?php echo $row8['email']; ?>"><?php echo $row8['email']; ?></a></p>
							</div>
						</div>
						<?php }?>
						<!-- <div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-globe"></span>
							</div>
							<div class="text">
								<p><span>Website</span> <a href="#">yoursite.com</a></p>
							</div>
						</div> -->
					</div>
					<!-- <div id="map" class="map"></div> -->
				</div>
			</div>
		</div>
	</section>
	

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Lets talk about</h2>
						<p><?php
							$result9 = mysqli_query($connect, "SELECT *FROM `about_me` WHERE `id` = '1'");
							$row9 = mysqli_fetch_array($result9);
								echo $row9['intro'];
						?></p>
						<!-- <p><a href="#" class="btn btn-primary">Learn more</a></p> -->
					</div>
				</div>
				<!-- <div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div> -->
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
						<?php
								$result10 = mysqli_query($connect, "SELECT *FROM `about` WHERE `id` = '1'");
								while($row10 = mysqli_fetch_array($result10))
								{
							?>
							<ul>
								<li><span class="icon fa-solid fa-location-dot"></span><span class="text"> <?php echo $row10['address']; ?></span></li>
								<li><a href="tel:+91<?php echo $row10['phone']; ?>"><span class="icon fa-solid fa-phone"></span><span class="text">+91 <?php echo $row10['phone']; ?></span></a></li>
								<li><a href="mailto:<?php echo $row10['email']; ?>"><span class="icon fa-solid fa-paper-plane"></span><span class="text"><?php echo $row10['email']; ?></span></a></li>
							</ul>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Follow Me</h2>
						<p>Let us be social</p>
						<ul class="ftco-footer-social list-unstyled mt-2">
						<?php
                          $result11 = mysqli_query($connect, "SELECT *FROM `social`");
                          while($row11 = mysqli_fetch_array($result11))
                          {
                        ?>
							<li class="ftco-animate"><a href="<?php echo $row11['link']; ?>" target="_BLANK"><span class="<?php echo $row11['icon']; ?>"></span></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12 text-center">

					<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
					</div>
				</div>
			</div> -->
		</footer>
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
		<!-- <script src="js/google-map.js"></script> -->
		
		<script src="js/main.js"></script>

		<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

		
	</body>
	</html>