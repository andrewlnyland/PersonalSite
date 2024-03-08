<?php include "../embed.php";?>
<!doctype html>
<?php $members = array(
"Hansac Ho", "members/hansac.jpg", 3, "K-pop star who specializes in being awesome", "I joined robotics for the variety of students; the nuts and bolts",
"Jade Martens","members/jade.jpg", 2, "Idk someone who was in some of the classes and she's pretty cool but idk her that well", "member",
"Emily Molina","members/emily.jpg", 3, "Long time enthusiast, I'm really busy, and i'm a panda", "I joined cause this is hella fun",
"Eric Bonilla","members/eric.jpg", 2, "He has nice teeth and is basically a beautiful person", "he seems to like this club",
"Bowen Zhu","members/nopic.jpg", 2, "Apparently I know her but idk tbh", "Some reasons, other reasons, etc",
"Iain Dixon","members/iain.jpg", 3, "Bow ties are cooL", "ya bruh YYG",
"Person 1","members/nopic.jpg", 0, "Some text", "a quote",
"Person 2","members/nopic.jpg", 3, "Some text", "a quote",
"Person 3","members/nopic.jpg", 0, "Some text", "a quote",
"Person 4","members/nopic.jpg", 1, "Some text", "a quote",
"Person 5","members/nopic.jpg", 2, "Some text", "a quote",
"Person 6","members/nopic.jpg", 0, "Some text", "a quote",
); 

$grades = array("Freshie", "Softmore", "Junior", "'Bout to graduate");
?>
<html>
	<head>
		<title>CHHS Tigers Team 4829</title>
		<link rel="stylesheet" type="text/css" href="<?php doc_root();?>firstversion/style.css">
	</head>
	<body>
		<div class="nav">
			<div class="nav-section">
				<h1 class="title"><a href="<?php doc_root();?>firstversion/">FRC Team 4829</a></h1>
				<div class="page-description">Titanium Tigers</div>
			</div>
			<div class="nav-section">
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#the-team">Our Team</a></li>
					<li><a href="#contact">Contact</a></li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="banner"></div>
		<div class="about section">
			<div class="page-wrap" id="about">
				<h2>About Us</h2>
				<div id="robot-pic"></div>
				<p>The Titanium Tigers are an FRC (FIRST Robotics Competition) team. Each year, we design, build, program, and drive a robot in order to prepare for a competition in March. We are a 4th year team based at Chapel Hill High School. We thank all of our sponsors for helping us reach our goals.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="team section">
			<div class="page-wrap" id="the-team">
				<h2>Our Team</h2>
				<?php for ($i=0; $i<count($members)/5; $i++):?>
					<div class="person-wrap-outer">
						<div class="person-wrap-inner">
							<img src="<?php echo $members[($i*5)+1];?>"/>
							<h3><?php echo $members[($i*5)];?></h3>
							<small><?php echo $grades[$members[($i*5)+2]];?></small>
							<div class="person-description"><?php echo $members[($i*5)+3];?></div>
							<div class="quote"><?php echo $members[($i*5)+4];?></div>
						</div>
					</div>
				<?php endfor;?>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="contact section">
			<div class="page-wrap" id="contact">
				<h2>Contact</h2>
				<?php if ($_POST) {
					$name = $_POST["name"];
					$subject = $_POST["name"];
					$email = $_POST["email"];
					$message = $_POST["message"];
					$headers = "Contact from $name";
					$msg = "Name: ".$name."\nEmail: ".$email."\n".$message;
					mail("a.l.nyland@gmail.com", $subject, $msg, $headers);
				}?>
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
			</div>
		</div>
		<div class="footer">
			<div class="page-wrap">
				<p style="text-align: center; color: #BBB; font-family: Georgia; text-shadow: 0 1px 1px black;">The plural of fish is <em>hella fish</em></p>
			</div>
		</div>
	</body>
</html>
