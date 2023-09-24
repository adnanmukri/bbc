<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="icon" href="image/bbc-1-1.png" type="image/gif" sizes="16x16">
	<title>BBC Enterprises - Bringing Life To The Interior</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="With three decades of history, we have been one of the leading players in the interior contracting industry and have had the experience of several generations in the business.">
	<meta name="keywords" content="architecture, building, business, bootstrap, creative, exterior design, furniture design, gallery, garden design, house, interior design, landscape design, multipurpose, onepage, portfolio, studio">
	<meta name="author" content="BBC Enterprises">

	<!-- CSS Files
    ================================================== -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap" />
	<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" id="bootstrap-grid" />
	<link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" id="bootstrap-reboot" />
	<link href="css/plugins.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/custom.css" rel="stylesheet" type="text/css">
	<link href="css/color.css" rel="stylesheet" type="text/css">

	<!-- custom background -->
	<link rel="stylesheet" href="css/bg.css" type="text/css">

	<!-- color scheme -->
	<link rel="stylesheet" href="css/colors/bbc.css" type="text/css" id="colors">

	<!-- revolution slider -->
	<link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css">
	<link rel="stylesheet" href="css/rev-settings.css" type="text/css">

	<!-- load fonts -->
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
	<link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">

	<!-- custom font -->
	<link rel="stylesheet" href="css/font-style-2.css" type="text/css">
</head>

<body class="de_light bbc">

	<div id="wrapper">

		<!-- Header Begin -->
		<?php include('header.php'); ?>
		<!-- Header Close -->

		<!-- subheader -->
		<section id="subheader" data-speed="8" data-type="background">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Contact Us</h1>
						<ul class="crumb">
							<li><a href="index.html">Home</a></li>
							<li class="sep">/</li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- subheader close -->

		<!-- content begin -->
		<div id="content">

			<div class="container">
				<div class="row">

					<div class="col-md-8 offset-md-2">
						<form name="contactForm" id='contact_form' method="post">
							<div id="step-1" class="row">
								<div class="col-md-12 mb30">
									<h4><i class="fa fa-home id-color"></i>What is your property type?</h4>

									<div class="de_form de_radio">
										<div class="radio-img">
											<input id="radio-1a" name="Property_Type" type="radio" value="Residential" checked="checked">
											<label for="radio-1a"><img src="images/select-form/1.jpg">Residential</label>
										</div>

										<div class="radio-img">
											<input id="radio-1b" name="Property_Type" type="radio" value="Office">
											<label for="radio-1b"><img src="images/select-form/2.jpg">Office</label>
										</div>

										<div class="radio-img">
											<input id="radio-1c" name="Property_Type" type="radio" value="Commercial">
											<label for="radio-1c"><img src="images/select-form/3.jpg">Commercial</label>
										</div>

										<div class="radio-img">
											<input id="radio-1d" name="Property_Type" type="radio" value="Retail">
											<label for="radio-1d"><img src="images/select-form/4.jpg">Retail</label>
										</div>

										<div class="radio-img">
											<input id="radio-1e" name="Property_Type" type="radio" value="Other">
											<label for="radio-1e"><img src="images/select-form/5.jpg">Other</label>
										</div>
									</div>
								</div>

								<div class="col-md-6 mb10">
									<h4><i class="fa fa-arrows-alt id-color"></i>Total area size you want to renovate
									</h4>
									<div class="row">
										<div class="col-md-6">
											<input type='text' name='Area Size' id='area-size' class="form-control" placeholder="Area Size" required>
										</div>

										<div class="col-md-6">
											<select name="Unit Size" id="unit_size" value="" class="form-control">
												<option value="sqft">Square Feet(sqft)</option>
												<option value="m">meter(m)</option>
												<option value="ft">Feet(ft)</option>
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-6 mb10">
									<h4><i class="fa fa-tag id-color"></i>Select a renovation budget</h4>
									<div class="row">
										<div class="col-md-12">
											<select name="Budget" id="budget" value="" class="form-control">
												<option value="Budget Friendly">Budget Friendly</option>
												<option value="Mid Range">Mid Range</option>
												<option value="High End">High End</option>
											</select>
										</div>
									</div>

								</div>

							</div>

							<div id="step-2" class="row">
								<h4><i class="fa fa-user id-color"></i>Enter your details</h4>

								<div class="col-md-6">
									<div id='name_error' class='error'>Please enter your name.</div>
									<div>
										<input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required>
									</div>

									<div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
									<div>
										<input type='email' name='Email' id='email' class="form-control" placeholder="Your Email" required>
									</div>

									<div id='phone_error' class='error'>Please enter your phone number.</div>
									<div>
										<input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
									</div>
								</div>
								<div class="col-md-6">
									<div id='message_error' class='error'>Please enter your message.</div>
									<div>
										<textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
									</div>
								</div>

								<div class="col-md-12">
									<div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
									<p id='submit' class="mt20">
										<input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
									</p>
								</div>
							</div>
						</form>

						<div id="success_message" class='success'>
							Your message has been sent successfully. Refresh this page if you want to send more
							messages.
						</div>
						<div id="error_message" class='error'>
							Sorry there was an error sending your form.
						</div>

					</div>

				</div>
			</div>
		</div>

		<!-- Footer Begin -->
		<?php include('footer.php'); ?>
		<!-- Footer Close -->

	</div>



	<!-- Javascript Files
    ================================================== -->
	<script src="js/plugins.js"></script>
	<script src="js/designesia.js"></script>
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
	<script src="form.js"></script>

	<!-- SLIDER REVOLUTION SCRIPTS  -->
	<script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</body>

</html>