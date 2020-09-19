<?php 
session_start();
include('dbconnection.php');
if (isset($_POST['submit'])) {

    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $mdp1=$_POST['mdp1'];
      // error handlers
    // letsh check for empty field
    if( empty($mdp1)){
        header("Location: ../index.php?=Empty_field");
        exit();

    }else{
           // check if email is valid
           if(empty($email)){
            header("Location: ../index.php?=invalid_email");
        exit();
           }
           else{

            
               $sql="SELECT * FROM users WHERE email='$email' OR pseudo='$email'";
               $result=mysqli_query($conn,$sql);
               $resultCheck=mysqli_num_rows($result);
               if ($resultCheck < 1) {
                header("Location: ../index.php?=error");
                exit();
               }
               else{
                   if($row=mysqli_fetch_assoc($result)){
                        $hashedpasswordCheck=password_verify($mdp1,$row['mdp']);
                        if($hashedpasswordCheck == false){
                            header("Location: ../index.php?=wrong password");
                            exit();
                        }elseif($hashedpasswordCheck==true){
                            $_SESSION['u_id']=$row['ID'];
                            $_SESSION['pseudo']=$row['pseudo'];
                            $_SESSION['email']=$row['email'];
                            $_SESSION['nom']=$nom;
                            $_SESSION['prenom']=$prenom;


                            header("Location: ../inc/index-login.php?=Connection_success");
                            if ($_SESSION['u_id']==12) {
                                
                            header("Location: ../inc/admin/index.php?=Connection_success");
                            }



















                            exit();








                        }
                   }
               }

           }
    }
}else{
    header("Location: ../index.php?=empty");
    exit();
}



?>