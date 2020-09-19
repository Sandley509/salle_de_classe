<?php 
    include('./dbconnection.php');
    if (isset($_POST['add'])) {

        $titre=mysqli_real_escape_string($conn,$_POST['titre']);
        $professeur=mysqli_real_escape_string($conn,$_POST['professeur']);
        $description=mysqli_real_escape_string($conn,$_POST['description']);
        $photo=$_POST['photo'];

        $sql='SELECT * FROM cours WHERE title= $title';
        $result=mysql_query($conn,$sql);
        $resultcheck=mysql_num_rows($result);
        if($row === 10 {
            $row=mysqli_fetch_assoc($result);
            header('Location:./course_adding.php?Chnager le nom de votre cours');
            exit;




        }else{
            $sql='INSERT INTO cours () VALUES ('');';
        }
        
    }else {
        header('Location:../index.php?Press continue')
    }


?>