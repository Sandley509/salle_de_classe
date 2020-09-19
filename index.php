<?php session_start(); ?>
<style>
body{
    background-image:url("img/bg-2.jpg");
}

</style>


<!-- including bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/stylea.css">

<div class="container">
    <div class="row">
    <div class="col lg-6">

    <h2 class="text-black  pt-5" style="font-weight:bolder; font-size:3.5em; margin-top:60px ">
    Salle de Classe<br>
    </h2>
    <h2>Soyez Vos propres Educateur , Choisissez Ce que vous voulez apprendre,quand vous voulez apprendre,Et pourquoi
    Vous <br>voulez apprendre...</h2></h2>

    </div>

    <div class="col lg-6 pt-5">
 
    <form action="inc/connection.inc.php" method="Post">
    <div class="well bg-primary text-white text-center mt-5 ">
        <h2>Connection</h2>
    </div>
    <br>
        <div class="form-group">
            <input type="text" name="email" id="" class="form-control" placeholder="JonhDoe@POI.com">
        </div>
        <div class="form-group">
            <input type="password" name="mdp1" id="" class="form-control" placeholder="password">
        </div>
        
        Pas encore menmbre? <a href="signup.php">Inscrivez-vous</a> Gratuitement. <br>

        <div>

<button class="btn btn-primary" type="submit" name="submit">
  Connection
</button>
<br><br><br>




    </form>
 
    </div>

    </div>
</div>