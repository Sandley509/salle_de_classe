
<?php  
session_start();
    if(isset($_POSt['submit'])){
       include('db.inc.php'); 
       $nom=mysqli_real_escape_string($conn,$_POST['nom']);
       $prenom=mysqli_real_escape_string ($conn,$_POST['prenom']);
       $ville=mysqli_real_escape_string ($conn,$_POST['ville']);
       $pays=mysqli_real_escape_string ($conn,$_POST['country']);
       $checkbox=mysqli_real_escape_string ($conn,$_POST['checkbox-1']);
       $checkbox1=mysqli_real_escape_string ($conn,$_POST['checkbox-2']);
       $checkbox2=mysqli_real_escape_string ($conn,$_POST['checkbox-3']);
       $profil=$_POST['profil-pic']);
       $mdp1=($_POST['pwd']);
       $mdp2=  ($_POST['pwd1']);
       $email=mysqli_real_escape_string($conn,$_POST['email']);


// error handlers
    // letsh check for empty field
    if(empty($nom) ||  empty($prenom) || empty($mdp1) || empty($pwd2)|| empty($email) ){
        header("Location: ../signup.php?=Champ_Vide");
        exit();

    }else{
        // lets check if input chracteres are valid
        if (preg_match("/^[a-zA-Z]*$",$nom,$prenom)) {
            header("Location: ../signup.php?=invalid");
            exit();
        }else{
            // check if email is valid
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?=invalid_email");
            exit();
            }else{
                // lets check if the pseudo is not taken
                $sql="SELECT * FROM users WHERE Nom='$nom'";
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
                    $sql="INSERT INTO user (nom,prenom,checkbox1,checkbox2,email,mdp,checkbox,,ville,pays'profil')
                                     VALUES ('$nom','$prenom','$checkbox','$checkbox1','$checkbox2','$email','$hashpassword','$ville','$pays','$profil')";
                    mysqli_query($conn,$sql);
                    $_SESSION['nom']=$nom;
                    $_SESSION['email']=$email;
                    header("Location: ../index.php?=Connection_success");
                    exit();
                }
            }
        }

    }
    


    }

    else{
        header('Location:..//index.php');
        exit();
    }


?>