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
$result = $db->send_sql($sql);
$optionArray;
$i = 0;
$votes = 0;
while($array =$result->fetch_assoc())
{
	$optionArray[$i] = $array["optionText"];
	$votes +=  $array["tally"];
	$i++;
}



$printString = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>
	<h1> Edit Poll </h1>

<FORM action ="PollsPage.php" method="GET">

	';


if ($votes > 0 )
{
	$printString = $printString . 'Editing has been disabled because people have voted. 
	<br> <fieldset disabled>' . '

		<div class="form-group">
			Poll Title: <br>  
			<INPUT type="text" name="Name" value = "' . $pollName . '" id="disabledTextInput" class="form-control" placeholder="Disabled input"/> <br>
			<form role="form">';
				
			for($i = 0; $i < count($optionArray); $i++)
			{

				$printString = $printString . ' <br>
				Option ' . $i . ': <br>
				<INPUT type="text" name="Option' . $i . '" value = "' . $optionArray[$i]  . '" id="disabledTextInput" class="form-control" placeholder="Disabled input"/> <br>
				<br> ';
			}

				$printString = $printString . '
				Poll Description: <br>
				<textarea rows="4" cols="50" name= "description>">' . $pollDesc . '
				</textarea>
				<br>

				<INPUT type="submit" name="submit" value="GO!"/>
			</FORM>';

}



else
{
	$printString = $printString . '

		<div class="form-group">
			Poll Title: <br>  
			<INPUT type="text" name="Name" value = "' . $pollName . '"/> <br>
			<form role="form">';

			for($i = 0; $i < count($optionArray); $i++)
			{
				$printString = $printString . '
				Option ' . $i . ': <br>
				<INPUT type="text" name="Option' . $i . '" value = "' . $optionArray[$i]  . '"/> <br>
				';
			}
				$printString = $printString . '
				Poll Description: <br>
				<textarea rows="4" cols="50" name= "description>">' . $pollDesc .  '
				</textarea>
				<br>

				<INPUT type="submit" name="submit" value="GO!"/>
			</FORM>';
}




	echo($printString);

			?>
