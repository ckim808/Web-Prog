<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>
	<h1> Create New Deliverable! </h1>

	<FORM action ="submit_deliverable.php" method="POST">
		Deliverable Name: <br>  
		<INPUT type="text" name="Name" required/> <br>
		Person Responsible: <br>
		<?php
            include ("./databaseClass.php");
            $db = new database();
            $db->connect();

            $sql = "SELECT id, name FROM `user`";
            $result = $db->send_sql($sql);
            
            while($row = $result->fetch_assoc()) {
                echo '<INPUT type="radio" name="Person" value = '.$row["id"].' required checked />'.$row["name"].'<br>';    
            }
            $db->disconnect();
        ?>
		<br> Due Date: <br>
		<INPUT type="date" name="Date" />
        <br> Time Due: <br>
		<INPUT type="time" name="Time" />
		<br> Deliverable State: <br>
		<input type="radio" name="state" value="Assigned" checked>Assigned 
		<input type="radio" name="state" value="Started">Started 
		<input type="radio" name="state" value="Finished">Finished 
		<br>
		<br>
		The Person responsible for this deliverable will be notified of its creation.  
		<br>
		<INPUT type="submit" name="submit" value="GO!"/>
	</FORM>



