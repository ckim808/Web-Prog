<?php
session_start();

$requiredID = 2;

$UID = $_SESSION['sessionUID'];

//echo("$UID");
include("databaseClass.php");
include ("import_scripts.php"); 

$db = new database();
$db->connect();

$sql = "SELECT * FROM `user` WHERE `id` = '$UID'";
$result = $db->send_sql($sql);

if(!$result || mysqli_num_rows($result) <= 0)
{
  echo('not found');
}

else
{
  $row = $result->fetch_assoc();
  $group_id = $row["group_id"];

  if($group_id <= $requiredID)
  {

  }

  else
  {
    echo('
      <script type="text/javascript">
        window.location = "sorry.php"
      </script>
      ');
  }

}
$db->disconnect();
?>
<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <!-- fullCalendar -->


  
  <!-- Jquery and facebox-->
  <link href="Utils\facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="Utils\faceplant.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="myStylesheet.css" rel="stylesheet" type="text/css" />
  <link href="Utils\bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="Utils\jasny-bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="Utils\jquery.js" type="text/javascript"></script>
  <script src="fullcalendar-2.2.2/lib/jquery.min.js"></script>
  <script src="Utils\facebox.js" type="text/javascript"></script>
  <script src="Utils\bootstrap.min.js"></script>

  
<script src="fullcalendar-2.2.2/lib/moment.min.js"></script>
<script src="fullcalendar-2.2.2/fullcalendar.js"></script>
  <script src='fullcalendar-2.2.2/fullcalendar.min.js'></script>
  <script src='fullcalendar-2.2.2/lib/jquery-ui.custom.min.js'></script>
  <link rel="stylesheet" href="fullcalendar-2.2.2/fullcalendar.css" />




  <script>
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loading_image : 'loading.gif',
      close_image   : 'closelabel.png'
    })
  })
 </script>


  <script>
    $(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    var calendar = $('#calendar').fullCalendar
    ({
     editable: false,
     header: 
     {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },

    events: "events.php",

    selectable: false,
        eventClick: function(calEvent, jsEvent, view) {
            var starttime = calEvent.start.toLocaleString();
            if(!calEvent.end)
                var endtime = "";
            else
                var endtime = calEvent.end.toLocaleString();
        alert('Event: ' + calEvent.title
             + '\nDescription: ' + calEvent.description + '\nLocation: '
             + calEvent.location + '\nStart Time: ' + starttime + '\nEnd Time: ' + 
             endtime + '\nURL: ' + calEvent.url);

        return false;

    }
    
    
  });

  });

 </script>



 <title>SASE Admin Home</title>

 <!-- Bootstrap core CSS -->
 <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">

</head>

<body>
	<?php include 'portal_topnav.php'; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li ><a href="AdminHome.php">Home <span class="sr-only">(current)</span></a></li>
					<li ><a href="DelivPage.php">Deliverables</a><li>
						<li ><a href="PollsPage.php">Polls</a></li>

						<li class="active"><a href="CalPage.php">Calendar</a></li>
						<li><a href="pendingUser.php">Manage New Users</a></li>
						<li class><a href="topAdminPage.php">Manage Admins</a></li>
					</ul>
				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Calendar Page</h1>
          <a id="new_event" href="javascript: jQuery.facebox({ajax:'NewEvent.php'});" class = "btn btn-sm btn-primary pull-right" role = "button"> New Event </a>

          <div id='calendar'></div>
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


    <div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" title="" data-original-title="Copy to clipboard">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1416008466408">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1416008466408" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">                </object></div><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none" style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10" style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200</text></svg>
  </body>

  </html>