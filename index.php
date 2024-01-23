<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-Ue-Compatable" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Portfolio Website Design | Codehal</title>

 	<!-- swiper css -->
 	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

	<!-- box icon -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<!-- custom css -->
	<link rel="stylesheet" href="style.css">
<body>

	<!-- header design -->
		<header class="header">
			<img id="" src="" alt="">
			<a href="#" class="logo">Portfolio.</a>

			<nav class="nabvar">
				<a href="#home" class="active">Home</a>
				<a href="#about" class="active">About</a>
				<a href="#services" class="active">Services</a>
				<a href="#portfolio" class="active">Portfolio</a>
				<a href="#contact" class="active">Contact</a>
			</nav>
		</header>

		<!-- home section design -->
		<section class="home" id="home">

			<div class="home-content">
				<h3><i>Hello, I am</i></h3>
				<h1><i>Reynold Dingle</i></h1>
				<p><i>Its my pleasure to help you.</i></p>

				<div class="social-media">
					<a href="https://www.facebook.com/"><i class='bx bxl-facebook-circle' ></i></a>
					<a href="https://twitter.com/"><i class='bx bxl-twitter'></i></a>
					<a href="https://www.instagram.com/"><i class='bx bxl-instagram-alt'></i></a>
					<a href="https://www.linkedin.com/"><i class='bx bxl-linkedin-square'></i></a>
				</div>
			</div>
		</section>

		<!-- about section design --> 
		<section class="about" id="about">
			<div class="about-img">
				<img src="pro.jpg" alt="" style="border-radius: 80px;">
			</div>

			<div class="about-content">
				<h2 class="heading">About <span>Me</span></h2>
				<h3>Hi, I'm Reynold Dingle a Web Developer</h3>
				<p>A Web Developer is a programmer who develops World Wide Web applications using a client–server model. The applications typically use HTML, CSS, and JavaScript in the client, and any general-purpose programming language in the server. HTTP is used for communications between client and server.</p>
			</div>
		</section>


		<!-- services design -->
		<section class="sevices" id="services">
			<h2 class="heading">My <span>Services</span></h2>

			<div class="services-container">
				<div class="services-box">
					<i class='bx bx-code-alt'></i>
					<h3>Web Developer</h3>
					<p>Web Developer is one of the service i can offer to you.</p>
					<a href="#" class="btn">Read More</a>
				</div>
				<div class="services-box">
					<i class='bx bx-paint'></i>
					<h3>Graphic Design</h3>
					<p>Graphic Design is also one of the service i can offer to you.</p>
					<a href="#" class="btn">Read More</a>
				</div>
			</div>
		</section>

		<!-- portfolio section design -->   

		<section class="portfolio" id="portfolio">
			<div class="testimonial-container">
				<h2 class="heading">Latest <span>Project</span></h2>

				<div class="testimonial-wrapper" >
					<div class="testimonial-box mySwiper">
						<div class="testimonial-content swiper-wrapper">
							<div class="testimonial-slide swiper-slide">

								<div class="portfolio-container">
									<div class="portfolio-box">
										<img src="j.jpg" alt="">

										<div class="portfolio-layer">
											<p>ATM Machine is one of my latest projest.</p>
											<a href="#"><i class='bx bx-link-external'></i></a>
										</div>
									</div>
								</div>

							</div>
							<div class="testimonial-slide swiper-slide">

								<div class="portfolio-container">
									<div class="portfolio-box">
										<img src="j.jpg" alt="">

										<div class="portfolio-layer">
											<p>This is one of my latest projest.</p>
											<a href="#"><i class='bx bx-link-external'></i></a>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>		
						<div class="swiper-pagination"></div>	
				</section>
					</div>
				</div>
			</div>

	<!-- testimonial design -->
	<section class="testimonial" id="testimonial">
	<div class="testimonial-container">
		<h2 class="heading">Valuable <span>Testimonial</span></h2>

		<div class="testimonial-wrapper" >
			<div class="testimonial-box mySwiper">
				<div class="testimonial-content swiper-wrapper">
					<div class="testimonial-slide swiper-slide">
						<img src="man.jpg" alt="">
						<h3>JM Mancao</h3>
						<p>JM is one of my testimonial. We work together as a team.</p>
					</div>
					<div class="testimonial-slide swiper-slide">
						<img src="ja.jpg" alt="">
						<h3>Jamaldi Daud</h3>
						<p>jamaldi is one of my testimonial. We work together as a team.</p>
					</div>
					<div class="testimonial-slide swiper-slide">
						<img src="ro.jpg" alt="">
						<h3>Rodel Valmores</h3>
						<p>Rodel is one of my testimonial. We work together as a team.</p>
					</div>
				</div>

				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>		
				<div class="swiper-pagination"></div>	
		</section>
			</div>
		</div>
	</div>

	<!-- contact section design -->
	<section class="contact" id="contact">
		<h4 class="heading">Contact <span>Me</span> <br>or<br>Leave a <span>Message.</span></h4>

		<form action="#">
			<div class="info">
				<label>My email: </label>
				<a href="#">reynolddequito3@gmail.com</a><br>
				<label>Contact No. </label>
				<label>09532373923</label><br>
				<label>Address: </label>
				<label>Mate Titay Z,S,P</label>
			</div>
			<textarea name="" id="" cols="20" rows="5" placeholder="Your Message"></textarea>
			<input type="submit" value="Send Message" class="btn">
		</form>
	</section>

<!-- footer design -->
<footer class="footer">
	<div class="footer-text">
		<p>Copyright &copy; 2024 by Ding's code | All Rights Reserved</p>
	</div>

	<div class="footer-iconTop">
		<a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
	</div>
</footer>

<!-- swiper js -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js -->
<script src="js/script.js"></script>
<script>
	var swiper = new Swiper(".mySwiper", {
	  slidesPerView: 1,
	  spaceBetween: 30,
	  loop: true,
	  pagination: {
		el: ".swiper-pagination",
		clickable: true,
	  },
	  navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	  },
	});
  </script>
</body>
</html>