<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>
	<h1> Add New Event to Calendar </h1>

	<FORM action ="add_event.php" method="POST">
		Event Name: <br>  
		<INPUT type="text" name="title" required/> <br>
        Location: <br>  
		<INPUT type="text" name="location" /> <br>
		Start Time: <br>
		<INPUT type="datetime-local" name="start" required/>
        <br> End Time: <br>
		<INPUT type="datetime-local" name="end" required/><br>
        Description of Event:<br>
        <textarea rows="5" cols="30" name="description"></textarea><br>
        url: <br>  
		<INPUT type="text" name="url" required/> <br>
		
		<br>
		<INPUT type="submit" name="submit" value="GO!"/>
	</FORM>
    </head>
</html>