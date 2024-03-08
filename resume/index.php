<?php //Andrew Nyland?>
<!doctype html>
<html>
	<head>
		<title>Resume Template</title>
		<style>
			body {margin: 0; font-family: "Open Sans";}
			h1 {
				text-transform: uppercase;
				border-bottom: 1px dotted #24A;
				font-size: 1.4rem;
				color: #237;
			}
			a {color: #44B;}
			#reference-data .part {
				text-align: center;
			}
			#reference-data ul {
				margin: 0;
			}
			#experience {padding: 0 1em; margin-top: 2em;}
			#experience .part {padding: 0;}
			#experience .part:nth-child(2n) {padding-left: 1em;}
			#experience h2 {margin-bottom: 0; font-size: 1.2em;}
			#education {min-width: 550px;}
			.group {display: flex; flex-flow: nowrap row; justify-content: space-between;}
			.part {flex: 2 3; padding: 0 1em;}
			.event, .entry-info, #reference-data ul {position: relative; text-align: left;}
			.event span, .entry-info span, li > span {position: absolute; right: 0;}
			.entry-info {font-family: Georgia; border-bottom: 1px solid #888;}
			.entry ul, #reference-data ul {
				list-style-type: none;
			}
			#reference-data ul {padding: 0;font-style: italic;}
			.entry ul {
				padding-left: 1.3em;
			}
			.entry li {position: relative;}
			.entry ul li:before {
				content: '>';
				color: red;
				position: absolute;
				left: -1em;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="/style.css">
	</head>
	<body>
		<?php include($_SERVER["DOCUMENT_ROOT"]."/header.php"); echo "header here";?>
		<div id="reference-data" class="group">
			<div id="personal" class="part">
				<h1>Andrew Nyland</h1>
				<div><a href="mailto:alnyland@vt.edu">alnyland@vt.edu</a></div>
				<div>810 Giles Rd. Blacksburg, VA 24060</div>
				<div><a href="https://www.linkedin.com/in/andrew-nyland/">https://www.linkedin.com/in/andrew-nyland/</a></div>
				<div><a href="http://andrewnyland.net">andrewnyland.net</a></div>
				<div><a href="tele:9194484160">(919) 448-4160</a></div>
			</div>
			<div id="education" class="part">
				<h1>Education</h1>
				<div class="event">Virginia Tech - Blacksburg, VA<span>2016-Current</span></div>
				<ul>
					<li>Galileo Engineering Living Learning Community<span>'16-'17</span></li>
					<li>Intended major: Computational Neuroscience<span>expected grad: 2021</span></li>
				</ul>
				<div class="event">Chapel Hill High School - GPA 3.83/4<span>2013-2016</span></div>
				<div class="event">Emerson Waldorf School - GPA 3.78/4<span>2004-2014</span></div>
			</div>
		</div>
		<div id="experience">
			<h1>Relevant Experience</h1>
			<div class="group">
				<div class="part">
					<div class="entry">
						<h2>Title</h2>
						<div class="entry-info">Company<span>When</span></div>
						<ul>
							<li>Did some stuff</li>
							<li>Some more stuff</li>
							<li></li>
						</ul>
					</div>
				</div>
				<div class="part">
					<div class="entry">
						<h2>Title</h2>
						<div class="entry-info">Company<span>When</span></div>
						<ul>
							<li>Did some stuff</li>
							<li>Some more stuff</li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="side-info" class="group">
			<div class="part">
				<h1>Activites and Projects</h1>
				<div class="event">Name <span>'16-Current</span></div>
			</div>
			<div class="part">
				<h1>Languages</h1>
				<div class="event">Name <span>'15-Current</span></div>
			</div>
		</div>
	</body>
</html>