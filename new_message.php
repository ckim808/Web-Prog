<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>
	<h1> New Message </h1>

	<FORM action ="submit_message.php" method="POST">
		Send To: <br>
		<?php
            include ("./databaseClass.php");
            $db = new database();
            $db->connect();

            $sql = "SELECT id, name FROM `user` WHERE id != '".$_SESSION['sessionUID']."'";
            $result = $db->send_sql($sql);
            
            while($row = $result->fetch_assoc()) {
                echo '<INPUT type="radio" name="Person" value = '.$row["id"].' required checked />'.$row["name"].'<br>';    
            }
        ?>
		<br> Message: <br>
        <textarea name="text" rows="10" cols="50" required></textarea> 
		<br>
		<INPUT type="submit" name="submit" value="GO!"/>
	</FORM>

