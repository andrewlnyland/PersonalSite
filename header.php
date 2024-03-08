<div id="overlay" onclick="clearOverlay();"></div>
<div id="top"></div>
<div id="header">
<div class="page-wrap">
	<div class="main-nav">
		<div class="part left">
			<h1 style="float: left;"><a href="/">AN</a></h1>
			<ul style="float: left;">
				<li><a href="/photography">photographer</a></li>
				<li><a href="/programming">programmer</a></li>
				<li><a href="/designs">designer</a></li>
				<li><a href="/blog">writer</a></li>
				<li><a href="/about">student</a></li>
				<div class="clearfix"></div>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="part right">
			<h1><a href=""><?php echo $title;?></a></h1>
		</div>
		<?php if ("photography" == $title) :?>
		<div class="part right">
			<ul>
				<?php for ($i=3; $i<count($dir); $i++) : ?>
					<li><a href="#<?php echo $dir[$i];?>"><?php echo $dir[$i];?></a></li>
				<?php endfor; ?>
				<div class="clearfix"></div>
			</ul>
		</div>
		<?php endif; ?>
		<div class="clearfix"></div>
	</div>
</div>
</div>