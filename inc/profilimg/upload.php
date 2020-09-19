
<?php 
session_start();
include_once 'dbh.php';

<?php 
session_start();
include_once 'dbh.php';
$id=$_SESSION['id'];
    if (isset($_POST['submit'])) {
        $file=$_FILES['file'];
        $fileName=$_FILES['file']['name'];
        $fileTmpName=$_FILES['file']['tmp_name'];
        $fileSize=$_FILES['file']['size'];
        $fileError=$_FILES['file']['error'];
        $fileType=$_FILES['file']['type'];

        $fileExt=explode('.',$fileName);
        $fileActualExt= strtolower(end($fileExt));

        $allowed=array('jpg','jpeg','JPG','JPEG','png');
        
        if (in_array($fileActualExt,$allowed)) {
            if ($fileError===0) {
                if ($fileSize< 50000000) {
                    $fileNameNew="profile".$id.".".$fileActualExt;
                    $fileDestination='upload/'.$fileNameNew;
                    move_uploaded_file( $fileTmpName, $fileDestination);
                    $sql="UPDATE profileimg SET status = 0 WHERE userid='$id';";
                    $result=mysqli_query($conn,$sql);
                    header('Location:index.php?upload_Sucess');
                    

                }else{
                    header('Location:signup.php?fichier_trop_volumineux');
                exit();
                }
            }else{
                header('Location:signup.php?erreur');
                exit();

            }


        }else{
            header('Location:signup.php?Vous_ne_pouvez_pas_ajouter_des_photos_de_ce_type');
            exit();
        }



    }


?>