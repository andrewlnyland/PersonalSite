<?php include "embed.php";?>
<!doctype html>
<html>
	<head>
		<title>Team 4928 - Home</title>
		<link rel="stylesheet" type="text/css" href="<?php doc_root();?>style.css">
		<style type="text/css">
			img {max-width: 100%;}
		</style>
		<script src="<?php doc_root();?>script.js"></script>
	</head>
	<body>
		<?php include("header.php");?>
		<div class="banner"></div>
		<div class="page-wrap">
			<section>
				<h2 style="text-align: left;">Intro</h2>
				<p>Welcome to the website of FRC Team 4829 The Titanium Tigers! We are a robotics team based out of Chapel Hill High School in Chapel Hill, NC. We design, build, program, and wire a robot every year, and compete in competitions across the state with other teams. Fabrication of the robot is limited to an intensive six week build season. Competitions start in March, and can last until April. There is also an NC offseason competition called THOR (Thundering Herd of Robots) that the team attends every year in October. <a href="<?php doc_root();?>about">Read more about us</a>.</p>
			</section>
			<section>
				<h2>The Robot</h2>
				<p style="text-align: center;">Each robot is custom designed and built by our team. Here are our 2015 and 2016 robots, click <a href="<?php doc_root();?>robots">here</a> to read more.</p>
				<div class="home-two-view first">
					<img src="<?php doc_root();?>robot.jpg"/>
					<h3>Recycle Rush</h3>
				</div>
				<div class="home-two-view">
					<img src="<?php doc_root();?>robot2.jpg"/>
					<h3>Prettiest robot ever.</h3>
				</div>
				<div class="clearfix"></div>
				<div style="text-align: center; padding: 1em 0;"><a href="<?php doc_root();?>robots" class="cool-link">Learn more</a></div>
			</section>
			<section>
				<h2>Sponsors</h2>
				<p>We would like to give a massive thanks to our sponsors and donors this year! Without their help, our team would not be possible. FRC robotics is really important to everyone on the team, so we really appreciate all the people who make our goals a reality by supporting our robotics endeavours.</p>
				<p style="text-align: center;"><a href="<?php doc_root();?>sponsors" class="cool-link">View Sponsors</a></p>
			</section>
			<section>
				<h2>Contact</h2>
				<?php if ($_POST) {
					$name = $_POST["name"];
					$subject = $_POST["name"];
					$email = $_POST["email"];
					$message = $_POST["message"];
					$headers = "Contact from $name";
					$msg = "Name: ".$name."\nEmail: ".$email."\n".$message;
					mail("email.example.com", $subject, $msg, $headers);
					//any content that is shown after someone submits a contact request.
					echo "<h3 style=\"text-align: center;\">Thank you for contacting us.</h3>";
					echo "<p style=\"text-align: center;\">We'll get back to ASAP.</p>";
				} else{?>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<div id="contact-name">
						<label>Name</label>
						<input name="name"/>
					</div>
					<div id="contact-subject">
						<label>Subject</label>
						<input name="subject"/>
					</div>
					<div id="contact-email">
						<label>Email</label>
						<input type="email" name="email"/>
					</div>
					<div id="contact-message">
						<label class="at-top">Message</label>
						<textarea name="message" cols="40" rows="4"></textarea>
					</div>
					<input type="submit">
				</form>
				<?php }?>
			</section>
		</div>
		<?php include("footer.php");?>
	</body>
</html>