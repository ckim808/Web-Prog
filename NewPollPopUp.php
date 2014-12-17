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
					var num = return_data.charAt(0);
					num = parseInt(num);
          var optionString = ""; //= "Option 1: <br><INPUT type='text' name='Option1'/><br>"; 
         // var
         for (i=1; i <= num; i++)
         {
         	var stringI = i.toString();
         	optionString = optionString + "Option " + stringI + ": <br><INPUT type='text' name='Option" + stringI +"'/><br>";
         }
         
         document.getElementById(dispLoc).innerHTML = optionString;
     }
 }
 
    hr.send(vars); // Actually execute the request
    
}

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
			var num = return_data.charAt(0);
			num = parseInt(num);
          var optionString = ""; //= "Option 1: <br><INPUT type='text' name='Option1'/><br>"; 
         // var
         for (i=1; i <= num; i++)
         {
         	var stringI = i.toString();
         	optionString = optionString + "Option " + stringI + ": <br><INPUT type='text' name='Option" + stringI +"'/><br>";
         }
         
         document.getElementById(dispLoc).innerHTML = optionString;
         document.getElementById("secrets").value = num;

     }
 }
 
    hr.send(vars); // Actually execute the request
    
}
</script>

<h1> Create New Poll </h1>


<form action="demo_form.asp">
	Choose the Number of Options(between 1 and 9): 
	<br>
	<input type="number" name="num" id="num" min="1" max="9" onchange="ajax_post('num','dispLoc','newPollScript.php')">
</form>
<br>


<br>

<FORM action ="pollCreationScript.php" method="POST" id ="formPlace">

	Poll Title: <br>  

	<INPUT type="text" name="Name" id="farts"/> <br>
	<INPUT type="hidden" id = "secrets" name="num"/> 
	
	<br>
	<div id="dispLoc"><b></b></div>
	<br> Accessible By: <br>


	Poll Description: <br>
	<textarea rows="4" cols="50" name= "description">This poll is for us to deicde which day to take a trip to the city.
	</textarea>
	<br>

	<INPUT type="submit" name="submit" value="GO!"/>
</FORM>






