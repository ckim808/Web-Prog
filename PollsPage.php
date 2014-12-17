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
  						<li class="active"><a href="PollsPage.php">Polls</a></li>
  						<li><a href="CalPage.php">Calendar</a></li>
  						<li><a href="pendingUser.php">Manage New Users</a></li>
  					</ul>
  				</div>
  				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  					<h1 class="page-header">Polls Page</h1>				
  					<a href="javascript: jQuery.facebox({ajax:'NewPollPopUp.php'});" class = "btn btn-sm btn-primary" role = "button"> Add Poll </a>
  					<br> <br>
  					
  					<?php
						// connect to database
						include("databaseClassMySQLi.php");
						$db = new database();
						$db->connect();	

						// get the polls that are already in the database
						$query = "SELECT * FROM poll";
						$res = $db->send_sql($query);
						
						$polls = array();
						$link = array();
						// go through each poll and set the pollid, name, and desc
						$i = 0;
						while($row = $res->fetch_assoc()) 
						{
							
							unset($pollid, $pollname, $polldesc, $poll);
							$pollid = $row["id_poll"];
							$pollname = $row["pollName"];
							if(array_key_exists("pollDesc", $row))
								$polldesc = $row["pollDesc"];

							//append html code to string
							$poll ='
							<section class ="well" id = "poll'.$pollid.'" >
								<h3>'.$pollname.'</h3>';
							if(isset($polldesc))
								$poll = $poll.'<h4>'.$polldesc.'</h4>';
							
							$polldata["id"] = $pollid;
								$part = "'EditPollPopUp.php'";
						$link[$i] = 
						'
						<form action="DelPollsPage.php" method="POST" >
						<button type = "submit" class = "btn btn-sm btn-danger" role = "button"> Delete Poll </button>
						<INPUT type="hidden" id = "secret" name="id" value="' . $polldata["id"] . '"/> 
						</form>
						</section>';  
						
							$polldata["text"] = $poll;
							$polls[] = $polldata;
							$i++;
						}
						$i = 0;
						foreach($polls as &$elem)
						 {
							
							unset($max_votes);
							//query the option table to get the options associated with current poll
							$query = "SELECT * FROM poll_option WHERE id_poll = ".$elem["id"];
							$res = $db->send_sql($query);
							
							// keep track of how many people voted on this poll
							$total_votes = 0;
							$max_votes = 0;
							while($row = $res->fetch_assoc())
							{
								$total_votes += $row["tally"];
								if(isset($max_votes))
									if($max_votes < $row["tally"])
										$max_votes = $row["tally"];
								else
									$max_votes = $row["tally"];
							}
							$elem["text"] = $elem["text"].'	
								<br><P> Number of Votes: '.$total_votes.'</P>';
							
							$res = $db->send_sql($query);
							$counter = 0;
							while($row = $res->fetch_assoc()) 
							{
								$counter++;
								$choice = $row["optionText"];
								$percent = 100;
								if($total_votes != 0)
									$percent = ($row["tally"]/$total_votes)*100;
								if($row["tally"] == $max_votes) 
								{
									$elem["text"] = $elem["text"].'
									<div class="alert alert-success" role="alert">
										<strong>Option '.$counter.': </strong>'.$choice.'
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="'.$row["tally"].'" aria-valuemin="0" aria-valuemax="'.$total_votes.'" style="width: '.$percent.'%;"><span class="sr-only">60% Complete</span></div>
										</div> 
									</div>';
								}
								else 
								{
									$elem["text"] = $elem["text"].'
									<div class="alert alert-danger" role="alert">
										<strong>Option '.$counter.': </strong>'.$choice.'
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="'.$row["tally"].'" aria-valuemin="0" aria-valuemax="'.$total_votes.'" style="width: '.$percent.'%;"><span class="sr-only">60% Complete</span></div>
										</div> 
									</div>';
								}
							}
							$elem["text"] = $elem["text"] . $link[$i];
							$i++;
						}
  					
  					for($i = 0; $i < count($polls); $i++)
  					{
  						echo $polls[$i]["text"];
  					}
  								
					$db->disconnect();

  					?>
  					</FORM>


  				</div>
  			</div>
  		</div>
  	</div>
  
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