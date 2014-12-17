<?php
session_start();

$requiredID = 2;

$UID = $_SESSION['sessionUID'];

//echo("$UID");
include("databaseClass.php");

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

        <!-- Jquery and facebox-->
        <link href="Utils\facebox.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="Utils\faceplant.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="myStylesheet.css" rel="stylesheet" type="text/css" />
        <link href="Utils/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="Utils/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="Utils\jquery.js" type="text/javascript"></script>
        <script src="Utils\facebox.js" type="text/javascript"></script>
        <script src="Utils/bootstrap.min.js"></script>

        <!-- fullCalendar -->
        <link rel="stylesheet" href="fullcalendar-2.2.2/fullcalendar.css" />
        <script src="fullcalendar-2.2.2/lib/jquery.min.js"></script>
        <?php include 'import_scripts.php'; ?> 
        <script src="fullcalendar-2.2.2/lib/moment.min.js"></script>
        <script src="fullcalendar-2.2.2/fullcalendar.js"></script>

        <script src='fullcalendar-2.2.2/lib/jquery-ui.custom.min.js'></script>
        <script src='fullcalendar-2.2.2/fullcalendar.min.js'></script>

        <script>

         $(document).ready(function() {
              var date = new Date();
              var d = date.getDate();
              var m = date.getMonth();
              var y = date.getFullYear();

              var calendar = $('#calendar').fullCalendar({
                   editable: false,
                   header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },

                    events: "events.php",

                   // Convert the allDay from string to boolean
                   /*eventRender: function(event, element, view) {
                        if (event.allDay === 'true') {
                         event.allDay = true;
                        } else {
                         event.allDay = false;
                        }
                    },*/
                   selectable: false,
                   /*selectHelper: true,
                   select: function(start, end) {
                   var title = prompt('Event Title:');
                   var url = prompt('Type Event url, if exits:');
                   if (title) {
                       var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
                       var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
                       $.ajax({
                           url: 'add_event.php',
                           data: 'title='+ title+'&start='+ start +'&end='+ end +'&url='+ url ,
                           type: "POST",
                           success: function(json) {
                            alert('Added Successfully');
                           }
                       });
                        calendar.fullCalendar('renderEvent',
                        {
                           title: title,
                           start: start,
                           end: end,
                        },
                       true // make the event "stick"
                       );
                    }
                    calendar.fullCalendar('unselect');
                   },

           editable: true,
           eventDrop: function(event, delta) {
               var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
               var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
               $.ajax({
                   url: 'update_event.php',
                   data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                   type: "POST",
                   success: function(json) {
                    alert("Updated Successfully");
                   }
               });
           },
           eventResize: function(event) {
               var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
               var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
               $.ajax({
                    url: 'update_event.php',
                    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                    type: "POST",
                    success: function(json) {
                     alert("Updated Successfully");
                    }
               });
            }*/
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
                    <div id='calendar'></div>
                </div>
        </div>
    </div>

    
    </body>

    </html>