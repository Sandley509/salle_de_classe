<?php 
session_start();
include('dbconnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<?php

    // check for user on the dtabase
    $sql="SELECT * FROM users";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) 
    // Loop them out 
    {
        while ($row = mysqli_fetch_assoc($result)) {
           
            $id=$row['ID'];
            $sqlImg="SELECT * FROM profileimage WHERE userid='$id' ";
            $resultImg=mysqli_query($conn,$sqlImg);
            while ($rowImg =mysqli_fetch_assoc($resultImg)) {
                echo"<div class='user-container'>";
                    if ($rowImg['status'] == 0 ) {
                        echo"<img src='upload/profile".$id.".jpg'>";
                    }
                    else{

                        echo"<img src='upload/profiledefault.jpg'>";
                    }
                    echo"<p>".$row['pseudo']. "</p>";


                echo"</div>";

            } 

        }
    } else{
        echo"There are no user yet";
    }



    if (isset($_SESSION['id'])) {
        if ($_SESSION['id']== 4) {
            echo"Your are logged in as user #4";
        }
        echo"
        <form action='upload.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='file'  >
            <button type='submit' name='submit'>UPLOAD</button>
        </form>";

    }else{
        echo"You are not logged in!";
        echo"<form action='signup.php' method='POST'>

        <input type='text' name='first' placeholder='FIRST NAME'>
        <input type='text' name='last' placeholder='LAST NAME'>
        <input type='text' name='uid' placeholder='USERNAME'>
        <input type='password' name='pwd' placeholder='PASSWORD'>
        <button type='submit' name='submitsignup'>SIGN UP</button>
        
        </form>";
    }


?>


     <p>Login as admin</p>

        <form action="login.php" method="post">
        
        <button type="submit" name="submitLogin">Login</button>
        
        </form>
    <p>Logout as admin</p>

        <form action="logout.php" method="post">
        
        <button type="submit" name="submitLogout">Logout</button>
         
        </form>
    
</body>
</html>