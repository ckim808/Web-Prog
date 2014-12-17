<?php

/* Values received via ajax */
$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

// connection to the database
try {
 $bdd = new PDO('mysql:host=localhost;dbname=sase', 'root', 'yoseob4ever');
 } catch(Exception $e) {
exit('Unable to connect to database.');
}
 // update the records
$sql = "UPDATE events SET title=?, start=?, end=? WHERE id_event=?";
$q = $bdd->prepare($sql);
$q->execute(array($title,$start,$end,$id));
?>