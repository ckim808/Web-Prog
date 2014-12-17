<?php
	echo
    '<div class="navbar-wrapper">
          <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
              <div class="container">
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
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="SASE_homepage.php">Home</a></li>
                    <li class="dropdown">
			<a href="SASE_About_Whatis.php" class="dropdown-toggle" data-toggle="dropdown" 
			role="button" aria-expanded="false">About Us<span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="SASE_About_Whatis.php">What is SASE?</a></li>
				<li><a href="SASE_About_Why.php">Why SASE?</a></li>
				<li><a href="SASE_About_Mission.php">Mission</a></li>
				<li><a href="SASE_About_Eboard.php">Board Members</a></li>
			</ul>
		    </li>
                    <li><a href="SASE_Events.php">Events</a></li>
                    <li><a href="SASE_conference.php">National Conference</a></li>
		    <li><a href="#about">Photo Gallery</a></li>
                    <li><a href="SASE_ContactUs.php">Contact Us</a></li>
                  </ul>
		  <button onclick="location.href=\'LoginPage.php\';" id="login" type="button" class="navbar-button navbar-right">Log in</button>
                </div>
              </div>
            </nav>

          </div>
        </div>';
	echo "\n";
?>