<!doctype html>
<html>
	<head>
		<title>AndrewNyland.net - About Me</title>
		<script src="/script.js"></script>
		<link rel="stylesheet" type="text/css" href="/style.css">
	</head>
	<body class="color-4">
		<?php if ($_POST) {
			$name = $_POST["uName"];
			$email = $_POST["uEmail"];
			$message = $_POST["uMessage"];
			mail("a.l.nyland@gmail.com", "Message from ".$name, $message . "\nFrom " . $name . "\n" . $email);
		}?>
		<?php $title = "about me"; include("../header.php"); ?>
		<div id="about1">
			<div class="page-wrap" style="height: 100%; position: relative;">
				<div id="about-intro">
					<h2>Andrew Nyland</h2>
					<ul>
						<li><em>Grew up in</em> Chapel Hill, NC.</li>
						<li>Spent most of my childhood <b>outside</b>, <b>observing</b> and <b>playing</b>. I also I learned <em>wilderness survival</em> in middle school.</li>
						<li>Before I was in high school, I became interested in film production and backend programming.</li>
						<li>During high school, I continued to teach myself <b>programming</b> and <b>web/graphic design</b>, and also began <b>photography</b>.</li>
						<li><em>I now attend</em> Virginia Tech where I plan to study <b>computer science</b>.</li>
					</ul>
					<p>I also enjoy skiing, snowboarding, swimming, climbing, and late night s'more cooking.</p>
				</div>
			</div>
		</div>
		<div id="about2">
			<div id="thanks">
				<div style="padding: 2em"; class="page-wrap">
					<h1>Thanks for writing</h1>
					<p>I will read your message and respond ASAP.</p>
					<div style="padding: 20px 0;">
						<a href="http://www.andrewnyland.net/about/">Done</a>
					</div>
				</div>
			</div>
			<div class="page-wrap">
				<div id="about-contact">
					<form method="post" action="#thanks">
						<div>
							<h2>Contact</h2>
							<label>Name:</label>
							<input type="text" name="uName">
						</div>
						<div>
							<label>Email:</label>
							<input type="email" name="uEmail">
						</div>
						<div>
							<label>Message:</label>
							<textarea cols="60" rows="15" name="uMessage">
							</textarea>
						</div>
						<div>
							<input type="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>