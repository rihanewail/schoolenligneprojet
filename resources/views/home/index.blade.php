<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/grid.css">
  <link rel="stylesheet" href="./css/style.css">
  
  <!-- Link-uri pentru incarcarea celor 2 fonturi - Poppins si Font Awesome -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap">
  <!-- .................... --> 
  
  <title>HomeSchool</title>

</head>
<body class="bodyfont">
	<!--Header-->
	<div class="header-container">
		<div class="logoandlink-container">
			<div class="logo">
				<a href="#heropart">
					<span class="logocolor1">Home</span><span class="logocolor2">School</span>
				</a>
			</div>
			<div class="link-top-distance">
				<a class="link-distance linkstyle" href="#benefits">Benefits</a>
				<a class="link-distance linkstyle" href="#reviews">Reviews</a>
				<a class="link-distance linkstyle" href="#prices">Pricing</a>
				<a class="link-distance linkstyle" href="#faq">FAQ</a>
			</div>
		</div>
		<div class="loginandsignup-container">
			<div class="login-top-distance">
				<a class="loginstyle" href="login">Login</a>
			</div>	
			<div class="signup-distance">
				<a  class="signupstyle" href="signup">Sign Up</a>
			</div>
		</div>
		<button class="hamburger" onclick="hamburgerLinks()">
			<i class="fa fa-bars"></i>
		</button>
	</div>
	<!--Hamburger links-->
	<div class="hamburgerlinks-container" id="hamburgerlink">
		<a href="#benefits">Benefits</a>
		<a href="#reviews">Reviews</a>
		<a href="#prices">Pricing</a>
		<a href="#faq">FAQ</a>
		<hr>
		<a href="login">Login</a>
		<a class="signupstyle" href="signup">Sign Up</a>
	</div>
	<!--Hero Part-->
	<div class="hero-container" id="heropart">
		<div class="title-subtitle-container">
			<h1 class="hero-title">Learn from the comfort of your home</h1>
			<p class="hero-subtitle">Learning never stops, but why invest more time than needed. Learn all the skills you need from the comfort of your own home without any worries.</p>
		</div>
		<div class="image-container">
			<img src="images/illustration-working.svg" alt="Person working" class="image-size">
		</div>
	</div>
	<!--Part2-Benefits-->
	<div class="benefit-container" id="benefits">
		<!--Get Started part 1-->
		<div class="getstarted-container1">
			<a class="getstarted" href="signup">Get Started</a>
		</div>
		<div class="title-container">
			<div>
				<h1 class="h1-benefit">Benefits</h1>
				<p class="p-benefit">There are a lot of benefits to using our platform to learn new skills</p>
			</div>
		</div>
		<div class="card-container">
			<div class="card">
				<div class="image-style">
					<img src="images/icon-brand-recognition.svg" alt="Icon brand recognition">
				</div>
				<h2 class="h2-benefit">Learning Metrics</h2>
				<p class="p-benefit">You can easily follow your progress with the help of our detailed statistics. Track your progress and celebrate your milstones.</p>
			</div>
			<div class="card">
				<div class="image-style">
					<img src="images/icon-detailed-records.svg" alt="Icon detailed records">
				</div>
				<h2 class="h2-benefit">At your own pace</h2>
				<p class="p-benefit">Learn at your own pace. Set the skills you want to learn and choose your own pace.</p>
			</div>
			<div class="card">
				<div class="image-style">
					<img src="images/icon-fully-customizable.svg" alt="Icon fully customizable">
				</div>
				<h2 class="h2-benefit">Large variety</h2>
				<p class="p-benefit">Choose from a large variety of skills to add to your repertoire. New skills constantly added each week for your entertainment.</p>
			</div>
		</div>
	</div>
	<!--Part3-Rates-->
	<div class="rates-container" id="reviews">
		<!--Part with the text and the rates.-->
		<div class="textandrates-container">
			<!--Part with the text-->
			<div>
				<h1 class="h1-rates">10,000+ of our users love our site.</h1>
				<p class="p-rates-subtitle">We only provide great courses combined with excellent service.</p>
			</div>
		</br>
			<h2 class="h1-rates">our expert and tetchers</h2>
			<!--Part with the rates-->
			<div>
				<div class="rate-card flex-row">
					<div class="star-container">
						<div class="flex-row">
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
						</div>
					</div>
					<div>
						<div>
							<p class="rate-card-text">Rated 5 Stars in Reviews</p>
						</div>
					</div>
				</div>
				<div class="rate-card flex-row">
					<div class="star-container">
						<div class="flex-row">
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
						</div>
					</div>
					<div>
						<div>
							<p class="rate-card-text">Rated 5 Stars in Report Guru</p>
						</div>
					</div>
				</div>
				<div class="rate-card flex-row">
					<div class="star-container">
						<div class="flex-row">
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
							<div class="star-distance">
								<img src="images/icon-star.svg" alt="star image">
							</div>
						</div>
					</div>
					<div>
						<div>
							<p class="rate-card-text">Rated 5 Stars in BestTech</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Part with testimonials-->
		<div class="testimonial-card-container">
			<div class="testimonial-card">
				<div class="flex-row">
					<div>
						<img src="images/image-colton.jpg" class="testimonial-image" alt="Person image">
					</div>
					<div>
						<div>
							<p class="testimonial-name">Colton Smith</p>
						</div>
						<div>
							<p class="testimonial-buyer">Verifie techer</p>
						</div>
					</div>
				</div>
				<div>
					<p class="testimonial-text">"I wanted to take my Photoshop skills to the next level fast. Not only did I find a lot of different courses on the platform but also materials. Excellent!"</p>
				</div>
			</div>
			<div class="testimonial-card">
				<div class="flex-row">
					<div>
						<img src="images/image-irene.jpg" class="testimonial-image" alt="Person image">
					</div>
					<div>
						<div>
							<p class="testimonial-name">rihanne waile</p>
						</div>
						<div>
							<p class="testimonial-buyer">Verified expert</p>
						</div>
					</div>
				</div>
				<div>
					<p class="testimonial-text">"Customer service is always excellent and very quick turn around. Completely delighted with the simplicity of the platform and multitude of courses that you can find."</p>
				</div>
			</div>
			<div class="testimonial-card">
				<div class="flex-row">
					<div>
						<img src="images/image-anne.jpg" class="testimonial-image" alt="Person image">
					</div>
					<div>
						<div>
							<p class="testimonial-name">Anne Wallace</p>
						</div>
						<div>
							<p class="testimonial-buyer">Verified techer</p>
						</div>
					</div>
				</div>
				<div>
					<p class="testimonial-text">"Registered on this learning platform and can only praise them for the very high standards of the courses. Will definitely use them again and recommend them to everyone!"</p>
				</div>
			</div>
			<div class="testimonial-card">
				<div class="flex-row">
					<div>
						<img src="images/image-daniel.jpg" class="testimonial-image" alt="Person image">
					</div>
					<div>
						<div>
							<p class="testimonial-name">Daniel David</p>
						</div>
						<div>
							<p class="testimonial-buyer">Verified techer</p>
						</div>
					</div>
				</div>
				<div>
					<p class="testimonial-text">"Need to learn something fast for work or just for yourself? No worries, they got it all covered. 10 out of 10, would definitely use them again and recommend them to everyone!"</p>
				</div>
			</div>
		</div>
		<a href="#" >see more</a>
	</div>
	<!--CountDown and Price-->
	<div class="countdown-price-container">
		<div class="countdownandtitle-container">
			<div class="countdown-title">
				<h1 class="countdown-titlestyle">Take advantage of our special offer for another</h1>
			</div>
			<div class="countdown-container">
				<div class="days-container">
					<div class="days">time</div>
					<div>Days</div>
				</div>
				<div class="hours-container">
					<div class="hours">time</div>
					<div>Hours</div>
				</div>
				<div class="minutes-container">
					<div class="minutes">time</div>
					<div>Minutes</div>
				</div>
				<div class="seconds-container">
					<div class="seconds">time</div>
					<div>Seconds</div>
				</div>
			</div>
		</div>
		<!--Price-->
		<div class="price-container" id="prices">
			<div>
				<h1 class="price-title">Our Prices</h1>
			</div>
			<div class="button-container">
				<div>
					<button class="annually-buttonstyle" id="anually-button" onclick="anually()">Anually</button>
				</div>
				<div>
					<button class="monthly-buttonstyle" id="monthly-button" onclick="monthly()">Monthly</button>
				</div>
			</div>
			<div class="price-card-container">
				<div class="white-price-card">
					<div class="price-card-textstyle">Basic</div>
					<div class="price-style" id="basicprice">$19.99</div>
					<hr>
					<div class="price-card-textstyle">10 courses/month</div>
					<hr>
					<div class="price-card-textstyle">2 Users Allowed</div>
					<hr>
					<div class="price-card-textstyle">No download</div>
					<hr>
					<div class="getstarted-button-distance">
						<a class="getstarted" href="signup.html">Get Started</a>
					</div>
				</div>
				<div class="purple-price-card">
					<div class="price-card-textstyle">Professional</div>
					<div class="price-style" id="profprice">$24.99</div>
					<hr>
					<div class="price-card-textstyle">20 courses/month</div>
					<hr>
					<div class="price-card-textstyle">5 Users Allowed</div>
					<hr>
					<div class="price-card-textstyle">No download</div>
					<hr>
					<div class="getstarted-button-distance">
						<a class="getstarted" href="signup.html">Get Started</a>
					</div>
				</div>
				<div class="white-price-card">
					<div class="price-card-textstyle">Master</div>
					<div class="price-style" id="masterprice">$39.99</div>
					<hr>
					<div class="price-card-textstyle">Unlimited courses/month</div>
					<hr>
					<div class="price-card-textstyle">10 Users Allowed</div>
					<hr>
					<div class="price-card-textstyle">Download allowed</div>
					<hr>
					<div class="getstarted-button-distance">
						<a class="getstarted" href="signup.html">Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Part FAQ-->
	<div class="container-faq" id="faq">
		<div class="card-faq">
			<div>
				<img src="images/woman.svg" alt="Woman working" class="faq-image">
			</div>
			<div class="text-faq">
				<h1 class="title-faq">FAQ</h1>
				<div>
					<div>
						<div class="question-arrow-distance">
							<div>
								<p class="question-faq">How many team members can I invite?</p>
							</div>
							<div class="arrow-image">
								<img src="images/icon-arrow-down.svg" alt="Arrow icon">
							</div>
						</div>
						<div class="answerfaq">
							<p>You can invite up to 2 additional users on the Free plan. There is no limit on team members for the Premium plan.</p>
						</div>
					</div>
					<hr>
					<div>
						<div class="question-arrow-distance">
							<div>
								<p class="question-faq" id="secondboldquestion">What is the maximum file upload size?</p>
							</div>
							<div class="arrow-image">
								<img src="images/icon-arrow-down.svg" alt="Arrow icon">
							</div>
						</div>
						<div class="answerfaq">
							<p>No more than 2GB. All files in your account must fit your allotted storage space.</p>
						</div>
					</div>
					<hr>
					<div>
						<div class="question-arrow-distance">
							<div>
								<p class="question-faq">How do I reset my password?</p>
							</div>
							<div class="arrow-image">
								<img src="images/icon-arrow-down.svg" alt="Arrow icon">
							</div>
						</div>
						<div class="answerfaq">
							<p>Click “Forgot password” from the login page or “Change password” from your profile page. A reset link will be emailed to you.</p>
						</div>
					</div>
					<hr>
					<div>
						<div class="question-arrow-distance">
							<div>
								<p class="question-faq">Can I cancel my subscription at any time?</p>
							</div>
							<div class="arrow-image">
								<img src="images/icon-arrow-down.svg" alt="Arrow icon">
							</div>
						</div>
						<div class="answerfaq">
							<p>Yes! Send us a message and we’ll process your request no questions asked.</p>
						</div>
					</div>
					<hr>
					<div>
						<div class="question-arrow-distance">
							<div>
								<p class="question-faq">Do you provide additional support?</p>
							</div>
							<div class="arrow-image">
								<img src="images/icon-arrow-down.svg" alt="Arrow icon">
							</div>
						</div>
						<div class="answerfaq">
							<p>Chat and email support is available 24/7. Phone lines are open during normal business hours.</p>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
	<!--Get Started part 2-->
	<div class="getstarted-container2">
		<div>
			<h1 class="getstarted2-text">Boost your knowledge today</h1>
		</div>
		<div class="getstarted-button-distance">
			<a class="getstarted" href="signup.html">Get Started</a>
		</div>
	</div>
	<!--Footer-->
	<div class="footer-container">
		<div class="footer-logo">
			<a>
				<span class="logocolor3">Home</span><span class="logocolor2">School</span>
			</a>
		</div>
		<div class="icons-container">
			<div class="icon-distance">
				<a href="https://www.facebook.com/" target="_blank">
					<i class="fa fa-facebook-official icons-style"></i>
				</a>
			</div>
			<div class="icon-distance">
				<a href="https://www.instagram.com/" target="_blank">
					<i class="fa fa-instagram icons-style"></i>
				</a>
			</div>
			<div class="icon-distance">
				<a href="https://twitter.com/twitter" target="_blank">
					<i class="fa fa-twitter icons-style"></i>
				</a>
			</div>
			<div class="icon-distance">
				<a href="https://www.pinterest.com/" target="_blank">
					<i class="fa fa-pinterest icons-style"></i>
				</a>
			</div>
		</div>
	</div>
  <script src="./js/javascript.js"> </script>   <!-- Incarcam fiesierul de JS --> 

</body>
</html>
