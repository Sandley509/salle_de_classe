<?php 

include('nav.php');
include('dbconnection.php');

if (isset($_POST['enroll'])) {
    $sql="INSERT INTO enroll (Id,Cours_title,Cours_description,status)
    VALUES (' $row','$cours_titre','$cours_description',1;)";
    mysqli_query($conn,$sql);
}


?>