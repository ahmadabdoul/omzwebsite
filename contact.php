<?php
include 'header.php';

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$to = "aabdulkadir109@gmail.com";
	$subject = "Omzfield Contact - $name";
	$body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
	$headers = "From: $email";

	if(mail($to, $subject, $body, $headers)){
		echo "<script>alert('Message sent successfully!')</script>";
	}else{
		echo "<script>alert('Message not sent!')</script>";
	}
}

?>
<title>OmzField | Contact Us</title>
	<section class="pager-sec">
		<div class="container">
			<ul class="pager-info">
				<li> <a href="index.php" title="">Home</a></li>
				<li><span>Contact Us</span></li>
			</ul><!--pager-info end-->
		</div>
	</section><!---pager-sec end-->

	<section class="map-full">
		<div class="mapouter">
		<iframe id="gmap_canvas4" src="https://maps.google.com/maps?q=No%2025%20Lobito%20Crescent%20Wuse%20II%20Abuja,%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
		</div>
		<div class="mp_contact_info">
			<div class="container">
				<div class="mp_contact_info_details">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full_wdth">
							<div class="cpt_info">
								<span class="cpt_icon"><i class="fa fa-map-marker"></i></span>
								<div class="cppt">
									<span>Address:</span>
									<h3>No 25 Lobito Crescent Wuse II Abuja</h3>
								</div>
							</div><!--cpt_info end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full_wdth">
							<div class="cpt_info">
								<span class="cpt_icon"><i class="fa fa-envelope"></i></span>
								<div class="cppt">
									<span>E-mail:</span>
									<h3>info@omzfield.ng</h3>
								</div>
							</div><!--cpt_info end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full_wdth">
							<div class="cpt_info">
								<span class="cpt_icon"><i class="fa fa-phone"></i></span>
								<div class="cppt">
									<span>Phone:</span>
									<h3>+234 803 449 6428</h3>
								</div>
							</div><!--cpt_info end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 full_wdth">
							<div class="cpt_info">
								<span class="cpt_icon"><i class="fa fa-clock-o"></i></span>
								<div class="cppt">
									<span>Mon-Fri:</span>
									<h3>8:00 AM - 8:00 PM, Sat-Sun</h3>
								</div>
							</div><!--cpt_info end-->
						</div>
					</div>
				</div><!--mp_contact_info_details end-->
			</div>
		</div><!--mp_contact_info end-->
	</section><!--map-full end-->


	<div class="page-content p-0">
		<div class="container">
			<section class="getin_touch block">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="gettouch_text">
							<h3 class="sc-title">Get In <span>Touch</span></h3>
							<p>Contact us if you have any questions about some of our HVAC services. You can also call if you need help with a heating, cooling or air quality issues. We provide free quotes for any new heating or AC equipment installation. Whether you need residential or commercial services, our experienced HVAC specialists are ready to serve you. </p>
							<h4>Follow us:</h4>
							<ul class="social_lnks">
								<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div><!--gettouch_text end-->
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="question_sec">
							<form id="contactform" name="contactform" method="post" novalidate>
								<div id="success">
									<p>Your message was sent successfully!</p>
								</div>
								<div id="error">
									<p>Something went wrong, try refreshing and submitting the form again.</p>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="input_field">
											<input type="text" name="name" placeholder="Your name">
										</div><!--input_field end-->
									</div>
									<div class="col-lg-6">
										<div class="input_field">
											<input type="number" name="phone" placeholder="Phone">
										</div><!--input_field end-->
									</div>
									<div class="col-lg-6">
										<div class="input_field">
											<input type="email" name="email" placeholder="Your e-mail">
										</div><!--input_field end-->
									</div>
									<div class="col-lg-12">
										<div class="input_field">
											<textarea name="message" placeholder="Your question"></textarea>
										</div><!--input_field end-->
									</div>
									<div class="col-lg-12">
										<div class="submit_btn">
											<input type="submit"  name="submit" value="Send Message">
										</div><!--submit_btn end-->
									</div>
								</div>
							</form>
						</div><!--question-sec end-->
					</div>
				</div>
			</section><!--getin_touch end-->
		</div>
	</div><!--page-content end-->

	<section class="newsletter-sec">
		<div  class="container">
			<ul class="nss_list">
				<li>
					<span>24/Hour</span> Emergency Service
				</li>
				<li>
					<span>Free</span> Consultations
				</li>
				<li>
					Newsletter Subscribe
				</li>
			</ul><!--nss_list end-->
			<form class="newsletter_form" id="newsletter_form" method="post" novalidate="novalidate">
				<input type="email" name="email" placeholder="Your e-mail" class="valid">
				<input type="submit" name="submit" value="OK">
			</form>
		</div>
	</section><!--newsletter-sec end-->

	<div class="our_map v1">
		<div class="mapouter">
		<iframe id="gmap_canvas4" src="https://maps.google.com/maps?q=No%2025%20Lobito%20Crescent%20Wuse%20II%20Abuja,%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
	</div>
	</div><!--our_map end-->
<?php
include 'footer.php';
?>