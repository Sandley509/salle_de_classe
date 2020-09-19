<?php
session_start();

if (isset($_POST['form_inscription'])) {
    // database include
    include_once('dbconnection.php');
    // recover values
    $nom=mysqli_real_escape_string($conn,$_POST['nom']);
    $prenom=mysqli_real_escape_string ($conn,$_POST['prenom']);
    $pseudo=mysqli_real_escape_string($conn,$_POST['pseudo']);
    $email=mysqli_real_escape_string($conn,$_POST['email1']);
    $email_confirm=mysqli_real_escape_string($conn,$_POST['email2']);
    $mdp1=($_POST['mdp1']);
    $mdp2=  ($_POST['mdp2']);


    // error handlers
    // letsh check for empty field
    if(empty($nom) ||  empty($prenom) || empty($pseudo) || empty($email) || empty($email_confirm) || empty($mdp1) || empty($mdp2)){
        header("Location: ../signup.php?=Empty_field");
        exit();

    }else{
        // lets check if input chracteres are valid
        if (preg_match("/^[a-zA-Z]*$",$pseudo)) {
            header("Location: ../signup.php?=invalid");
            exit();
        }else{
            // check if email is valid
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?=invalid_email");
            exit();
            }else{
                // lets check if the pseudo is not taken
                $sql="SELECT * FROM users WHERE pseudo='$pseudo'";
                $result=mysqli_query($conn,$sql);
                $resultCheck=mysqli_num_rows($result);
                if($resultCheck > 0){
                    header("Location: ../signup.php?=pseudo_deja_pris");
                    exit();
                }else{
                    // lets Hashing the password
                    if ($mdp1 != $mdp2) {
                        header("Location: ../signup.php?=invalid_password");
                        exit();
                    }else{
                        $hashpassword=password_hash($mdp1,PASSWORD_DEFAULT);
                    }
                    $sql="INSERT INTO users (nom,prenom,pseudo,email,mdp,numero)
                                     VALUES ('$nom','$prenom','$pseudo','$email','$hashpassword','$numero')";
                    mysqli_query($conn,$sql);

// addin image

$sql="SELECT * FROM users WHERE nom='$nom' AND prenom='$prenom'";
$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
            $userid=$row['id'];
            $sql="INSERT INTO profileimg (userid,status) 
                VALUES ('$userid',1)";
                mysqli_query($conn,$sql);
               

       } 
}else{
    echo"You have an error!";
}






                    $_SESSION['pseudo']=$pseudo;
                    $_SESSION['nom']=$nom;
                    
                    $_SESSION['numero ']=$nom;
                    $_SESSION['prenom']=$prenom;
                    $_SESSION['email']=$email;
                    header("Location: ../inc/index-login.php?=Connection_success");
                    exit();
                }
            }
        }

    }
    
  

    
    


















}
else{
    header("Location:: ../signup.php?=error");
    exit();
}

?>
