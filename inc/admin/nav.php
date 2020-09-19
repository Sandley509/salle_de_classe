<?php session_start();?>
<?php 
include_once 'dbconnection.php';

// Protect your website against url injection
    // if (!isset($_POST['form_inscription']) & isset($_POST['submit'])]) {
    //     header("Location:../index.php?Connecter_vous_pour_Continuer");
    //     exit();
        
    // }


// ?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Salle de Classe&amp; Cours en Lignes</title>

    <!-- Favicon -->
    <link rel="icon" href="../../img/Logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../style.css">

</head>

<body>
  

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +(509)4290-5423</a>
                <a href="#"><span>Email:</span> </a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Suivez nous</span>
                <a href="https://web.facebook.com/classroom509/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://twitter.com/ClasseSalle"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="../img/logoweb.png" alt="" width="250px"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="course_adding.php">course_adding</a></li>
                                <li><a href="dashboard.php" type="dashboard">Dashboard</a></li>
                                <li><a href="cours.php">Cours</a></li>
                                
                                <li><a href="blog.php">Certificat</a></li>
                                <li><a href="contact.php">Panier</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo$_SESSION['pseudo']; ?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="/profilimg/index.php">Profile</a>
                                            <a class="dropdown-item" href="#">carte</a>


                                            <form action="logout.inc.php" method="POST">
                                            <!-- <a class="dropdown-item" href="index.php">Deconnection</a> -->
                                            <input type="submit" value="Deconnection" name="logout" class="dropdown-item" style="cursor:pointer">
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="../img/bg-img/t1.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->


     <!-- ##### file upload##### -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
    
    </form>