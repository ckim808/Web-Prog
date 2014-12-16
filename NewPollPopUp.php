<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>
	<h1> Create New Poll </h1>

	<FORM action ="PollsPage.php" method="GET">
		Poll Title: <br>  
		<INPUT type="text" name="Name" value = "City Trip Date"/> <br>
		Option 1: <br>
		<INPUT type="text" name="Option1" value = "12/01/2014" />
		<br> Option 2: <br>
		<INPUT type="text" name="Option2" value = "12/02/2014" />
		<br> Option 3: <br>
		<INPUT type="text" name="Option3" value = "12/03/2014" />
		<br> Option 4: <br>
		<INPUT type="text" name="Option4" value = "12/04/2014" />
		<br> Accessible By: <br>
		 <div class="checkbox">
    <label>
      <input type="checkbox"> Admin
    </label>
     <div class="checkbox">
    <label>
      <input type="checkbox"> Eboard Members
    </label>
     <div class="checkbox">
    <label>
      <input type="checkbox"> Sponsors
    </label>
     <div class="checkbox">
    <label>
      <input type="checkbox"> Members
    </label>

		<br><br>
		Poll Description: <br>
		<textarea rows="4" cols="50" name= "description>">
This poll is for us to deicde which day to take a trip to the city.
		</textarea>
		<br>
		   
		<INPUT type="submit" name="submit" value="GO!"/>
	</FORM>



