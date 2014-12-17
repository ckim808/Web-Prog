<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>

	<script>


function ajax_post(loc,dispLoc,file)
{
	var hr = new XMLHttpRequest();
	var url = file;
	var data = document.getElementById(loc).value;
	var vars = "data="+data;
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() 
	{
		if(hr.readyState == 4 && hr.status == 200) 
		{
			var return_data = hr.responseText;
			var num = return_data;//.charAt(0);
			num = parseInt(num);
          var optionString = ""; 
         for (i=1; i <= num; i++)
         {
         	var stringI = i.toString();
         	optionString = optionString + "Option " + stringI + ": <br><INPUT type='text' name='Option" + stringI +"' required/><br>";
         }
         
         document.getElementById(dispLoc).innerHTML = optionString;
         document.getElementById("secrets").value = num;

     }
 }
 
    hr.send(vars); // Actually execute the request
    
}
</script>

<h1> Create New Poll </h1>

<FORM action ="pollCreationScript.php" method="POST" id ="formPlace">

	Choose the Number of Options(between 1 and 9): 
	<br>
	<input type="number" name="num" id="num" min="1" max="100" onchange="ajax_post('num','dispLoc','newPollScript.php')" required>

<br>


<br>

	Poll Title: <br>  

	<INPUT type="text" name="Name" required/> <br>
	<INPUT type="hidden" id = "secrets" name="num"/> 
	
	<br>
	<div id="dispLoc"><b></b></div>


	Poll Description: <br>
	<INPUT type="text" name="desc" required/> <br>
	<br>

	<INPUT type="submit" name="submit" value="GO!"/>
</FORM>






