<?php
//Andrew Nyland, 24060, 7/25/17
//Creates a pretty grid of categorized elements to track. Can do parts of projects or all responsibilities.
//ONLY SUPPORTS SINGLE WORD TITLES CURRENTLY
session_start();
//organize groups and registries
$groupF = file("info.txt");
$groups = array();
foreach ($groupF as $line) {
	$ripline = explode(" ", $line);
	if ($ripline[0] == '-1') { //Group name definiton
		$groups[$ripline[1]] = array("name" => $ripline[2], "items" => array());
	} else {
		array_push($groups[$ripline[1]]["items"], array("name"=>$ripline[2], "id"=>$ripline[0], "countT"=>0.0, "countD"=>0));
	}
}
?>
<!doctype html>
<html>
	<head>
		<title>Timeclock</title>
		<style type="text/css">
			.item {
				border: solid 1px #444;
				background: #111;
				color: #CCC;
				width: 100px; height: 100px;
				display: inline-block;
				vertical-align: top;
				margin: 5px;
			}
			.item h3 {
				margin: 0;
				padding: 1em 0;
			}
			.item:hover {
				
			}
			.group {
				display: inline-block;
				margin: 1em;
				padding: 1em;
			}
		</style>
		<script>
			function update(a) {
				alert(a.getElementsByTagName("h3")[0].id + " in group " + a.parentElement.getElementsByTagName("h2")[0].innerHTML);
				
			}
		</script>
	</head>
	<body>
		
		<div class="group-wrap">
			<?php for ($i=0; $i<count($groups); $i++) : ?>
			<div class="group">
				<h2><?php echo $groups[$i]["name"]; ?></h2>
				<?php $itemCount = count($groups[$i]["items"]); for ($j=0; $j<$itemCount; $j++) : ?>
				<div class="item" onclick="update(this);">
					<h3 id="<?php echo $groups[$i]["items"][$j]["id"]; ?>"><?php echo $groups[$i]["items"][$j]["name"]; ?></h3>
				</div>
				<?php 
				if (($j+1)%round(sqrt($itemCount)) == 0) {
					echo "<br>";
				}
				endfor; ?>
			</div>
			<?php endfor; ?>
		</div>
		<pre>
		//loop through groups, collect together visually
			//output item name, total time, day count - already defined
				//add an interactive display that accurately increments the time variables
		</pre>
	</body>
</html>