<!doctype html>
<html>
    <head>
        <title>Tools - Andrew Nyland</title>
		<style type="text/css">
			body {background: black; color: white; font-family: courier; }
			a {color: #DDD; }
			.dark {color: #AAA;}
			.projects {list-style-type: none; padding: 0;}
			canvas {top: 0; left: 0; right: 0; bottom: 0; z-index: -9999;}
		</style>
		<script src="enlighten.js"></script>
    </head>
    <body>
		<ul class="projects">
			<li><?php echo $_SERVER["SERVER_ADDR"]." @ ".gmdate("Y-m-d, H:i:s", $_SERVER["REQUEST_TIME"]); ?> to <script>document.write((new Date()).toUTCString());</script></li>
			<li>Welcome.</li>
			<li><span class="dark">------------</span></li>
			<?php
			$dir = scandir(".");
			array_shift($dir);
			array_shift($dir);
			if (count($dir)) {
				foreach ($dir as $d) {
					echo "<li>";
					if (is_dir($d)) {
						echo "<a href=\"".$d."/\">".$d."</a>";
					}
					else if ($d != "index.php") {
						echo $d;
					}
					echo "</li>";
				}
			}
			?>
			<li><a href="http://test.andrewnyland.net">Test</a></li>
			<li><a href="http://intercode.andrewnyland.net">Intercode</a></li>
		</ul>
    </body>
</html>