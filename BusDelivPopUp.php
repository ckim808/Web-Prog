<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>
	<h1> Bus Confirmation Deliverable</h1>

	<FORM Method ="LINK" ACTION="FakeDelEdit.php">
		Deliverable Name: <br>  
		<INPUT type="text" name="Name" value = "Bus Confirmation" /> <br>
		Person Responsible: <br>
		<INPUT type="text" name="Person" value = "Catherine Kim" />
		<br> Due Date: <br>
		<INPUT type="text" name="Date" value = "12/01/2014"/>
		<br> Deliverable State: <br>
		<input type="radio" name="state" value="Assigned" checked>Assigned 
		<input type="radio" name="state" value="Started" checked>Started 
		<input type="radio" name="state" value="Finished">Finished 
		<br>
		Deliverable Description: <br>
		<textarea rows="4" cols="50" name= "description>">
Get confirmation for our bus reservation. 
		</textarea>
		<br>
		<P>The Person responsible for this deliverable will be notified of its update.</P>  
		<br>
		<INPUT type="submit" name="submit" value="GO!"/>
	<a href="fakeDelEditDelete.php" class = "btn btn-sm btn-primary" role = "button"> Delete Deliverable </a>
		
	</FORM>


