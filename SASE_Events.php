<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SASE Stevens</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="SASE.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="fullcalendar-2.2.2/fullcalendar.css" />
    <script src="fullcalendar-2.2.2/lib/jquery.min.js"></script>
    <?php include 'import_scripts.php'; ?> 
    <script src="fullcalendar-2.2.2/lib/moment.min.js"></script>
    <script src="fullcalendar-2.2.2/fullcalendar.js"></script>
      <script>
            $(document).ready(function() {
                // page is now ready, initialize the calendar...
                $("#calendar").fullCalendar({
                   
                    // put your options and callbacks here
                })
            });
        </script>
  </head>
    <body>
        <?php include 'top_nav.php'; ?>   
        <div class="container" >
            <div id='calendar'> </div>
        </div> 
  </body>
</html>