<?php session_start(); ?>
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
					<li class="active"><a href="AdminHome.php">Home <span class="sr-only">(current)</span></a></li>
					<li ><a href="DelivPage.php">Deliverables</a><li>
					<li><a href="PollsPage.php">Polls</a></li>
					<li><a href="CalPage.php">Calendar</a></li>
                    <li><a href="pendingUser.php">Manage New Users</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-sm-offset-3 col-md-7 col-md-offset-2 main">
				<h1 class="page-header">Home Page</h1>
					

   <div class="jumbotron2">
        <h2> Upcoming Conference </h2>
        <p> The SASE conference is taking place on 12/01/2014. We are departing on 11/29 at 2pm. </p>
        <p><a href="http://www.saseconnect.org/conference/" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>

      <div class="jumbotron2">
        <h2> Weekly Meeting </h2>
        <p> We will have our Weekly meeting this coming Friday in Jacobus at 7pm. </p>
      </div>

      <div class="jumbotron2">
        <h2> City Trip  </h2>
        <p> The City Trip will take place on 11/21 at 5pm. </p>
        <p><a href="https://www.facebook.com/events/381137955372730/?ref_dashboard_filter=past" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>

 
        </div>
        <div id="right-home-menu" class="col-sm-4 col-md-3 pull-right">
            <div class="panel panel-primary">
                <div class="panel-heading">Notifications</div>
                    <div class="list-group">
                        <?php
                            include ("databaseClassMySQLi.php");
                            $db = new database();
                            $db->connect(); 
                            // get the deliverables that are already in the database
                            $curr_userid = $_SESSION['sessionUID'];
                            $query = "SELECT * FROM notifications WHERE targetUser = ".$curr_userid;
                            $res = $db->send_sql($query);

                            if(!$res || mysqli_num_rows($res) <= 0)
                            {
                                echo '<p class="list-group-item">No notifications</p>';
                            }
                             while($row = $res->fetch_assoc()) {
                                 if(isset($row["link"]) && isset($row["description"]))
                                 {
                                     echo '<a href='.$row["link"].' id="group-item" class="list-group-item" >
                                     <div class="row">
                                        <div>
                                            <h4 class="list-group-item-heading">'.$row["title"].'</h4>
                                            <p class="list-group-item-text">'.$row["description"].'</p>
                                        </div>
                                        <form action="hide_notification.php" method="POST">
                                            <input type="hidden" id="secret" name="id" value="'.$row["id_notification"].'" />
                                            <button class="btn pull-right" type="submit">Hide</button>
                                        </form>
                                    </div>
                                    </a>';
                                     
                                 }
                                 else if(isset($row["link"]))
                                 {
                                     echo '<a href='.$row["link"].' id="group-item" class="list-group-item" >
                                     <div class="row">
                                        <h4 class="list-group-item-heading">'.$row["title"].'</h4>
                                        <form action="hide_notification.php" method="POST">
                                            <input type="hidden" id="secret" name="id" value="'.$row["id_notification"].'" />
                                            <button class="btn" type="submit">Hide</button>
                                        </form>
                                    </div>
                                    </a>';
                                 }
                                 else if(isset($row["description"])) 
                                 {
                                        echo '<div id="group-item" class="list-group-item" >
                                     <div class="row">
                                        <div>
                                            <h4 class="list-group-item-heading">'.$row["title"].'</h4>
                                            <p class="list-group-item-text">'.$row["description"].'</p>
                                        </div>
                                        <form action="hide_notification.php" method="POST">
                                            <input type="hidden" id="secret" name="id" value="'.$row["id_notification"].'" />
                                            <button class="btn" type="submit">Hide</button>
                                        </form>
                                    </div>
                                    </div>'; 
                                 }
                                 else
                                 {
                                     echo '<div id="group-item" class="list-group-item" >
                                     <div class="row">
                                        <h4 class="list-group-item-heading">'.$row["title"].'</h4>
                                        <form action="hide_notification.php" method="POST">
                                            <input type="hidden" id="secret" name="id" value="'.$row["id_notification"].'" />
                                            <button class="btn" type="submit">Hide</button>
                                        </form>
                                    </div>
                                    </div>';
                                 }                       
                             }
                        ?> 
                            
                    </div>
            </div><br><br>
            <div class="panel panel-primary">
                <div class="panel-heading">Messages</div>
                <div class="list-group">
                    <?php
                            
                            // get the deliverables that are already in the database
                            $curr_userid = $_SESSION['sessionUID'];
                            $query = "SELECT * FROM messages WHERE targetUser = ".$curr_userid;
                            $res = $db->send_sql($query);
                            
                             if(!$res || mysqli_num_rows($res) <= 0)
                            {
                                echo '<p class="list-group-item">No messages</p>';
                            }

                            $messages = array();
                             while($row = $res->fetch_assoc()) {
                                 unset($current);
                                 $current = array();
                                 $current["id"] = $row["id_message"];
                                 $current["fromUser"] = $row["fromUser"];
                                 $current["message"] = $row["message"];
                                 $messages[] = $current;
                             }
                            foreach($messages as $elem)
                            {
                                $query = "SELECT name FROM user WHERE id = ".$elem["fromUser"];
                                $res = $db->send_sql($query);
                                echo '<div id="group-item" class="list-group-item" >
                                     <div class="row">
                                        <div>
                                            <h4 class="list-group-item-heading">New Message from '.$res->fetch_assoc()["name"].'</h4>
                                            <p class="list-group-item-text">'.$elem["message"].'</p>
                                        </div>
                                        <form action="hide_message.php" method="POST">
                                            <input type="hidden" id="secret" name="id" value="'.$elem["id"].'" />
                                            <button class="btn pull-right" type="submit">Delete</button>
                                        </form>
                                    </div>
                                    </div>';                                    
                             }
                       $db->disconnect(); ?>
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