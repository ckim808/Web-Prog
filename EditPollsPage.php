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
  
  <script>

  function ajax_post(loc,dispLoc,file,start)
{
	var hr = new XMLHttpRequest();
	var url = file;
	var data = document.getElementById(loc).value;
	var start = document.getElementById(start).value;
	var vars = "data="+data;
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() 
	{
		if(hr.readyState == 4 && hr.status == 200) 
		{
			var return_data = hr.responseText;
			var num = return_data.charAt(0);
			num = parseInt(num);
          var optionString = ""; //= "Option 1: <br><INPUT type='text' name='Option1'/><br>"; 
         // var
         for (i=1; i <= num; i++)
         {
         	var stringI = i.toString();
         	optionString = optionString + "Option " + stringI + ": <br><INPUT type='text' name='Option required" + stringI +"'/><br>";
         }
         
         document.getElementById(dispLoc).innerHTML = optionString;
         document.getElementById("secret").value = num;

     }
 }
 
    hr.send(vars); // Actually execute the request
    
}
</script>

	<?php include 'portal_topnav.php'; ?>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-sm-3 col-md-2 sidebar">
  				<ul class="nav nav-sidebar">
  					<li ><a href="AdminHome.php">Home <span class="sr-only">(current)</span></a></li>
  					<li ><a href="DelivPage.php">Deliverables</a><li>
  						<li class="active"><a href="PollsPage.php">Polls</a></li>
  						<li><a href="CalPage.php">Calendar</a></li>
  					</ul>
  				</div>
  				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  					<h1 class="page-header">Edit Polls Page</h1>				
<?php
include ("./databaseClass.php");

 if(empty($_POST['id']))
  {
    echo("no id sent");
    return false;
  }

  else
  {
  	
    $id = trim($_POST['id']);
    $id = intval($id);

  }



$db = new database();
$db->connect();

$sql = "SELECT * FROM `poll` WHERE id_poll = '$id'";
$result = $db->send_sql($sql);
$array = $result->fetch_assoc();


$pollName = $array["pollName"];
$pollDesc = $array["pollDesc"];

$sql = "SELECT * FROM `poll_option` WHERE id_poll = '$id'";

$optionArray = array();
$result = $db->send_sql($sql);
$i = 0;
$votes = 0;
 if(!$result || mysqli_num_rows($result) > 0)
  {
  	
	
    while($array = $result->fetch_assoc())
	{
		$optionArray[($i+1)] = $array["optionText"];
		$votes +=  $array["tally"];
		$i++;

	}

  }
  else
  {
    echo("No entries in database!");
  }



$ajaxString = "ajax_post('num','dispLoc','newPollScript.php', 'start')";

$printString = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>

	<form action="demo_form.asp">
	Choose the Number of Options(between ' . count($optionArray) .' and 9): 
	<br>
	<input type="number" name="num" id="num" min="'. count($optionArray)  . '" max="9" onchange="' . $ajaxString . '" value="' . count($optionArray) . '">
	<input type="hidden" name="start" id="start" value="' . count($optionArray) . '"> 
</form>
<br>
	';



if ($votes > 0 )
{
	$printString = $printString . 'Editing has been disabled because people have voted. 
	<br> <fieldset disabled>' . '

		<div class="form-group">
			Poll Title: <br>  
			<INPUT type="text" name="Name" value = "' . $pollName . '" id="disabledTextInput" class="form-control" placeholder="Disabled input"/> <br>
			';
				
			for($i = 1; $i <= count($optionArray); $i++)
			{

				$printString = $printString . ' <br>
				Option ' . $i . ': <br>

				<form action = "delPollHelp.php" method="POST">
				<INPUT type="text" name="Option' . $i . '" value = "' . $optionArray[$i]  . '" id="disabledTextInput" class="form-control" placeholder="Disabled input"/>
				<button type = "submit" class = "btn btn-sm btn-danger" role = "button"> Delete Option </button> 
				<input type="hidden" value="' . $id .'" name="id"/>
				<input type="hidden" value="' . $optionArray[$i] .'" name="option"/>
				</FORM>
				<br> ';
			}

				$printString = $printString . '
				<div id="dispLoc"><b></b></div>
				Poll Description: <br>
				<textarea rows="4" cols="50" name= "description>">' . $pollDesc . '
				</textarea>
				<br>

				<INPUT type="submit" name="submit" value="GO!"/>
			';

}



else
{
	$printString = $printString . '

		<div class="form-group">
			Poll Title: <br>  
			<INPUT type="text" name="Name" value = "' . $pollName . '"/> <br>
			';

			for($i = 1; $i <= count($optionArray); $i++)
			{
				$printString = $printString . '
				Option ' . $i . ': <br>
				<form action = "delPollHelp.php" method="POST">
				<INPUT type="text" name="Option' . $i . '" value = "' . $optionArray[$i]  . '" id="disabledTextInput" class="form-control" placeholder="Disabled input"/> 
				<button type = "submit" class = "btn btn-sm btn-danger" role = "button"> Delete Option </button> 
				<input type="hidden" value="' . $id .'" name="id"/>
				<input type="hidden" value="' . $optionArray[$i] .'" name="option"/>
				</FORM>
				<br> ';
			}
				$printString = $printString . '
				<div id="dispLoc"><b></b></div>
				Poll Description: <br>
				<textarea rows="4" cols="50" name= "description>">' . $pollDesc .  '
				</textarea>
				<br>

				<INPUT type="submit" name="submit" value="GO!"/>
			';
}




	echo($printString);

			?>
