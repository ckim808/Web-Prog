<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Signin Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="Utils/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="Utils/signin.css" rel="stylesheet">

  <link href="Utils\facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="Utils\faceplant.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="myStylesheet.css" rel="stylesheet" type="text/css" />
  <link href="Utils/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="Utils/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="Utils\jquery.js" type="text/javascript"></script>
  <script src="Utils\facebox.js" type="text/javascript"></script>
  <script src="Utils/bootstrap.min.js"></script>


  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->


      <script>
        function ajax_post(loc,sqlName,dispLoc,file)
        {
          var hr = new XMLHttpRequest();
          var url = file;
          var dataLoc = document.getElementById(loc).value;
          var vars = "data="+dataLoc+"&loc="+sqlName;
          hr.open("POST", url, true);
          hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          hr.onreadystatechange = function() 
          {
            if(hr.readyState == 4 && hr.status == 200) 
            {
              var return_data = hr.responseText;
              document.getElementById(dispLoc).innerHTML = return_data;
            }
          }
    hr.send(vars); // Actually execute the request
    
  }
</script>

</head>

<body>
<nav id="top_nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
  <div class="container-fluid">

    <form class="form-signin" role="form" action="LoginScript.php" method="post">
      <h1 class="form-signin-heading">LOGIN INCORRECT</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name = "email" id="inputEmail" onchange="ajax_post('inputEmail','email','dispLoc','loginCheck.php')" class="form-control" placeholder="Email address" required autofocus>
      <div id="dispLoc"><b></b></div>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name ="password" id="inputPassword"  class="form-control" placeholder="Password" required>
      <INPUT class="btn btn-lg btn-primary btn-block" type="submit">
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>