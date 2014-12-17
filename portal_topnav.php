<?php
	echo
	'<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="SASE_homepage.php">
                    <img src="images/sase_logo.jpg" alt="SASE logo" class="navbar-brand" />
                </a>
				<a class="navbar-brand" href="AdminHome.php">SASE Admin Page</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="LoginPage.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>';
	echo "\n";
?>