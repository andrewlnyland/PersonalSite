<?php 
	include "../embed.php";
	$members = 
	array(
		array(
			'name' => "mechanical",
			'desc' => "The mechanical subgroup deals with the chassis and superstructure of the robot.  Essentially, they make all the physical aspects of the robot that address the annual FRC competition challenge.  The mechanical group creates a drive train and appropriate superstructure.",
			'persons' => array(
				array("Emma Kunkel", "junior", "second", "I've always been interested in how things work, and why they work.  When I was younger, I used to love taking apart old appliances to see what was on the other side of the curtain.  During the time I've been in FIRST robotics, I've learned so much about how things work, and how to make things work in the way you want.", 0),
				array("Jade Martens", "junior", "head of mechanical / safety manager / second", "I joined the team because of my love for engineering.  What I love most about robotics is having a team of creative people to solve problems and build robots with.", 1),
				array("Hansac Ho", "senior", "first", "I decided to join the Robotics club because I enjoy being part of a team.  My involvement in the team specializes in the mechanical and building aspect of the robot.  Taking part in robotics has helped me advance my knowledge of the STEM field, as well allowed me to follow my passions.", 2),
				array("Eiley Hartzell-Jordan", "sophomore", "second", "Since joining this robotics team, I have become more interested in engineering.  This team fosters an engaging, positive, and uplifting environment which motivates me to continue my dedication to this team.  It is so motivating when, at the end of the build season, you get to see that the team's hard work and dedication was able to build such an awesome robot!", 0),
				array("Eric Bonilla", "senior / Co-captain", "second", "", 3),
				array("Madi Baldauf", "sophomore", "second", "", 0)
			)
		),
		array(
			'name' => "electrical",
			'desc' => "The electrical subgroup wires the control system of the robot. The control system is made up of a central power distribution panel and the roboRIO, which is like the brain of the robot. Motor controllers and limit switches are connected to both of these central components. The entire system is powered by a 12 V battery.",
			'persons' => array(
				array("Emily Molina", "senior / co-captain", "third", "I joined the robotics team after having an amazing experience with another section of FIRST called FLL (FIRST Lego League).  I have learned so much on the team, both about the technical skills involved with robotics and the professionalism and cooperation that comes with being on a serious robotics team.  Robotics is an activity I wouldn't trade for the world.", 4),
				array("Olivia Wander", "senior", "head of electrical / second", "I enjoy the process of making something, and robotics has allowed me to take that creativity and apply it in a practical way.  Being a part of the robotics team has introduced me to electrical engineering, which is now my chosen major for my undergraduate education.  Robotics also fosters the development of teamwork skills, communication, and leadership, valuable qualities for the professional world.", 0),
				array("Abbey Lee", "junior", "first", "I joined the Titanium Tigers for the fun and challenging opportunity of building a robot.  The idea of sketching something from scratch and seeing it come to life is so cool!", 0),
				array("Bowen Zhu", "junior", "first", "I joined robotics, because I wanted to have the opportunity to explore whether or not I like engineering and since our school doesn't have an engineering class, there wasn't actually a way to get hands on experience other than join the robotics club.", 0)
			)
		),
		array(
			'name' => "programming",
			'desc' => "The programming subgroup works on the code to drive the robot. The code is written in both Java and LabView, but the robot typically operates off of the LabView program. The group is starting to transition from LabView to Java this year, hence having the code written in both languages. The programmers decide the type of controller for the robot each year, be it an XBox controller, a joystick, or any other type of custom controller.",
			'persons' => array(
				array("Anja Sheppard", "sophomore", "head of programming / second", "I joined robotics so I could participate in a crazy but enjoyable challenge.  Robotics is a stressful activity, but in a good way that pushes me to work hard and do my best.  I really enjoy it because the club really let's us think out of the box to come up with innovative solutions.", 0),
				array("Noah Johnson", "senior", "second", "", 0),
				array("Iain Dixon", "senior", "second", "Nerd who saw friends were in club and wanted to do some programming again.", 5),
				array("Demi Wang", "freshman", "first", "A small Lego robot crew at my old school that I never had the time to join inspired me to join robotics this year.  CHHS's robotics team gave me a chance to experience what I had missed out on in middle school.  Having only been on the team for half a semester, I've made new friends, learned new skills, and found out about building robots.  I have developed leadership skills, built relationships, encouraged teamwork and collaboration, and of course learned new skills in the electrical, programming, and mechanical aspects of the robot.  The team is made up of talented, diligent, and creative members that work really hard to accomplish their goals, and I am honored to be a part of it.", 0),
				array("Sayali Gove", "sophomore", "second", "", 0),
				array("Santiago Oroco=Tomalin", "senior", "fourth", "I joined the first year this team was created, and honestly, I did it because I was bored and had experience with robotics.  But I got so much more than I expected.  This team has grown from just a group of random kids in to a small community of hard-working students in just these few short years, and it will only grow further from here.  Everyone is here because they love both the robotics and the people that come with it.  It is definitely worth the time and commitment because we all grow together here.", 0)
			)
		)
	);
?>
<!doctype html>
<html>
	<head>
		<title>Team 4928 - About</title>
		<link rel="stylesheet" type="text/css" href="<?php doc_root();?>style.css">
		<script src="<?php doc_root();?>script.js"></script>
	</head>
	<body>
		<?php include("../header.php");?>
		<div class="page-wrap">
			<h2 style="text-align: left;">About</h2>
			<p>The Titanium Tigers was started in the fall of 2012 by a small group of students at CHHS.  We started as a very small team of just six people.  The first few years, the team struggled to gain enough members and funding.  We did not have the adequate supplies or money to really be a successful team, but we still stuck with it and made the best out of our situation.  This 2015-2016 season, our team has finally grown to 18 members.  We also have fantastic support from our teacher advisors and outside mentors.  A unique aspect of the team is that we are a primarily female team, which is highly unusual in the FRC scene, and people from all high school grades participate on our team.</p>
<p>The team is divided into three primary subgroups: mechanical, electrical, and programming.  Each subgroup is led by a knowledgeable senior member who has enough expertise to teach the newer members.  The team is also headed by two co-captains who help govern the team and make sure the entire season runs smoothly.  We also have a secretary and a treasurer to help with other aspects of governance.</p>
<p>In December of 2015, the team was generously granted access to the old woodshop at CHHS.  Now, instead of working in a small back closet, our team can safely work in a larger space with adequate tools and storage areas.  The team worked hard to clean up the woodshop and adjust it to fit our needs.  Also, we set up many new safety regulations within the shop, since there are multiple pieces of large equipment and machinery that aid us in the fabrication of our robot.  The transition has been quite the process, but we are excited to finally have a substantial space where we can work safely for the 2016 competition!</p>
<p>The Titanium Tigers aims to encourage Chapel Hill High School students to participate in a STEM related organization, by engaging them in exciting programs that build science, engineering, and technology skills.  As an organization, the team allows students to further develop their leadership skills through communication, teamwork and an innovative mindset.</p>
			<h2>Team Subgroups</h2>
			<?php  $e = ".jpg"; $src=array("nopic".$e, "jade".$e, "hansac".$e, "eric".$e, "emily".$e, "iain".$e);
			for($i=0; $i<count($members); $i++): ?>
				<h3 id="<?php echo $members[$i]['name'];?>"><?php echo $members[$i]['name'];?></h3><hr>
				<p><?php echo $members[$i]['desc'];?></p>
				<div>
					<?php for ($j=0; $j<count($members[$i]['persons']); $j++):?>
						<div class="member-view <?php echo $members[$i]['name'];?>">
							<img src="<?php echo "members/".$src[$members[$i]['persons'][$j][4]];?>"/>
							<h4><?php echo $members[$i]['persons'][$j][0];?></h4>
							<small><em><span><?php echo $members[$i]['persons'][$j][1]; ?></span> - <span><?php echo $members[$i]['persons'][$j][2]; ?> year member</span></em></small>
							<p><?php echo $members[$i]['persons'][$j][3];?></p>
						</div>
					<?php endfor; ?>
					<div class="clearfix"></div>
				</div>
			<?php endfor; ?>
		</div>
		<?php include "../footer.php";?>
	</body>
</html>