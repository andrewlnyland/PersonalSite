<div id="education" class="resume-part"><!--Education-->
Virginia Tech - Blacksburg, VA <span class="date">2016 - Current</span><br>
<ul>
	<li>Galileo Engineering Living Learning Community<span class="date">2016 - 2017</span></li>
	<li>Intended major: B.S. Computer Science - expected graduation<span class="date">2020</span></li>
</ul>
Chapel Hill High School - Chapel Hill, NC<span class="date">2013 - 2016</span><br>
Emerson Waldorf School - Chapel Hill, NC<span class="date">2012 - 2013</span>
</div>
<?php
$entries = [
	["Lab Assistant", 
		"Current since April ’17",
		"Frith First Year Engineering Lab (VT)",
		"Supervised first year engineering students while they worked on projects and use advanced machines",
		"Trained students on 3D printers, CNC routers, power tools, 3D printers, and various hand tools",
		"Maintained and updated computers and machines in the lab as well as engineering class materials"],
	["Programmer, Designer", 
		"Feb – May ‘17", 
		"Original Frameworks", 
		"Rewrote entire site to meet current W3/Google standards", 
		"Added mobile device support to the design", 
		"Implemented a custom image admin system and page, supports uploading/deleting/descriptions."],
	["Management Assistant, Laborer, Carpenter", "Oct ‘14 – May ‘17", "Kind Green Builders (Chapel Hill, NC)", "", "", ""],
	["Webmaster, Engineer", "2015 - 2016", "FRC Team 4829 (Robotics club at CHHS)", "", "", ""],
	["Intern", "Aug ‘14 – Mar ’16", "The Shodor Foundation (Durham, NC)", "", "", ""],
	["Co-founder", "Aug ‘14 – Jan ‘16", "Computer Club at EWS (Chapel Hill, NC)", "", "", ""],
	["Marketing Assistant", "Aug ‘14 – Jul ‘15", "Emerson Waldorf School (Chapel Hill, NC)", "", "", ""],
	["Programmer", "July 2014", "Clarion Content", "", "", ""],
	["Webmaster, Project Manager", "Nov ’15 from Jun ‘13", "envisionwith.me (now visionary.courses)", "", "", ""],
	["position", "date", "location", "", "", ""],
	
];
?>
<div id="experience" class="resume-part">
<?php for ($i=0; $i<count($entries); $i++) :?>
	<div class="resume-entry">
		<h4 class="resume-position"><?php echo $entries[$i][0]; ?></h4>
		<!--<span class="date"><?php echo $entries[$i][1]; ?></span>-->
		<div class="resume-location"><em><?php echo $entries[$i][2]; ?></em> | <?php echo $entries[$i][1]; ?></div>
		<ul>
			<li><?php echo $entries[$i][3]; ?></li>
			<li><?php echo $entries[$i][4]; ?></li>
			<li><?php echo $entries[$i][5]; ?></li>
		</ul>
	</div>
<?php endfor;?>
</div>