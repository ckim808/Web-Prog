<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="http://getbootstrap.com/favicon.ico">

<!-- Jquery and facebox-->
<link href="Utils\facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link href="Utils\faceplant.css" media="screen" rel="stylesheet" type="text/css" />
<link href="myStylesheet.css" rel="stylesheet" type="text/css" />
<link href="Utils/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="Utils/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
<script src="Utils\jquery.js" type="text/javascript"></script>
<script src="Utils\facebox.js" type="text/javascript"></script>
<script src="Utils/bootstrap.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox({
			loading_image : 'loading.gif',
			close_image   : 'closelabel.png'
		})
	})
</script>

<title>SASE Admin Home</title>

<!-- Bootstrap core CSS -->
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>
	<?php include 'portal_topnav.php'; ?>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-sm-3 col-md-2 sidebar">
  				<ul class="nav nav-sidebar">
  					<li ><a href="AdminHome.php">Home <span class="sr-only">(current)</span></a></li>
  					<li ><a href="DelivPage.php">Deliverables</a><li>
  						<li><a href="PollsPage.php">Polls</a></li>
  						<li><a href="CalPage.php">Calendar</a></li>
  					</ul>
  				</div>
  				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  					<h1 class="page-header">Help Page</h1>

  						<h2> Page Navigation </h2>

  					<div class="alert alert-success" role="alert">
  						<h3> <strong> The Navigation Bars: </strong> </h3> 
  						 <hr>
  						<strong> Locations: </strong><p> The Navigation Bars are located on the left and top right of the broswer window.
  						<br><br>
  						<strong> Left Utilities: </strong><p>The left bar allows you to access the Home page, the deliverable page, the polls page, 
  						and the calender page. </p>
  						<br>
  						<strong> Top Right Utilities: </strong><p>The top right bar you to log out and to acccess your settings, your profile, and the help menu. 
  					</div>

  					<h2> Page Utilities </h2>

  					<div class="alert alert-success" role="alert">
  						<h3> <strong> Deliverables: </strong> </h3> 
  						 <hr>
  						<strong> What's There: </strong><p> A table containing the current deliverables to which you are related.
  						This can mean you are either assigned to work on them, Sor that you assigned them. A button to create a new
  						deliverable is also present on this page.</p> 
  						<br>
  						<strong> New Deliverable Button:</strong><p>Above the table there is a button from where one can create and 
  						assign a new deliverable.</p>
  						<br>
  						<strong> The Table: </strong><p>When on clicks on a given row of the table they are able to edit all of its
  						fields. They are also able to delete the entry.</p>
  						<br>
  					</div>

  					<div class="alert alert-success" role="alert">
  						<h3> <strong> Polls: </strong> </h3> 
  						 <hr>
  						<strong> What's There: </strong><p> A series of boxes which contain the current polls as well as there 
  						current results in the form of progress bars. There is additionally a button from which one can edit
  						and delete the current poll. </p> 
  						<br>
  						<strong> Add Poll Button:</strong><p>Above the table there is a button from where one can create and 
  						a new poll.</p>
  						<br>
  						<strong> A Given Poll: </strong><p>As stated above each poll displays its current progress. In additon
  						to this there is an edit and delete poll button at the bottom of each poll box. The edit button 
  						launches a popup window where the contents of the poll may be edited if no one has voted yet. The
  						delete button deletes the poll. </p>
  						<br>
  					</div>


  				</div>
  			</div>
  		</div>
  	</div>
  	<a href="javascript: jQuery.facebox({ajax:'hello.php'});">Programmatic ajax.</a><br/>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Dashboard Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js"></script>
    <script src="./Dashboard Template for Bootstrap_files/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>


    <div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" title="" data-original-title="Copy to clipboard">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1416008466408">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1416008466408" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">                </object></div><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none" style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10" style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200</text></svg></body>

    </html>