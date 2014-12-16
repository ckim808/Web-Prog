<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>
	<h1> Edit Poll </h1>

	<FORM action ="PollsPage.php" method="GET">

	Editing has been disabled because people have voted. 
	<br>
	<fieldset disabled>
    <div class="form-group">
		Poll Title: <br>  
		<INPUT type="text" name="Name" value = "Resteraunt Choice" id="disabledTextInput" class="form-control" placeholder="Disabled input"/> <br>
		<form role="form">
		Option 1: <br>
		<INPUT type="text" name="Option1" value = "Korean BBQ" id="disabledTextInput" class="form-control" placeholder="Disabled input"/>
		<br> Option 2: <br>
		<INPUT type="text" name="Option2" value = "Italian" id="disabledTextInput" class="form-control" placeholder="Disabled input"/>
		<br> Option 3: <br>
		<INPUT type="text" name="Option3" value = "Mexican" id="disabledTextInput" class="form-control" placeholder="Disabled input"/>
		<br> Option 4: <br>
		<INPUT type="text" name="Option4" value = "Indian" id="disabledTextInput" class="form-control" placeholder="Disabled input"/>
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