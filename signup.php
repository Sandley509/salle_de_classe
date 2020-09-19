<?php session_start(); ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
  
<style>
body{
    background-image:url("img/bg-2.jpg");
}

</style>  

<br><br><br>

<!-- Login form -->

<center>
  <div class="container ">
      <div class="row">
          <div class="col-md-3">
              
          </div>


          <div class="col-md-6 form-border">
                <form action="inc/signup.inc.php" class="border rounded py-2 px-2 bg-white" method="POST"> 
                        <div class="display-4 text-center">
                            <h4 class="Text-primary"">Inscription</h4>
                        </div><br>
                        <div class="btn btn-primary btn-lg">
                            Google
                        </div>
                        <div class="btn btn-primary btn-outline-primary btn-lg">
                            Facebook
                        </div>
                        <br><br>
                        OU
                        <h6>Inscrivez-vous avec votre email</h6>
                        <br>
                      
                <br>
                        <div class="form-group">
                            <input type="text" name="nom" id="" class="form-control" width="200px" value="<?php if (isset($nom)) {
                              echo$nom;
                            } ?>" placeholder="Nom">
                        </div>
                        <br>

                        <div class="form-group">
                            <input type="text" name="prenom" id="" class="form-control" width="200px" placeholder="Prenom" value="<?php if (isset($prenom)) {
                              echo$prenom;
                            } ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="pseudo" id="" class="form-control" width="200px" placeholder="Pseudo">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email1" id="" class="form-control" width="200px" placeholder="Email adresse">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email2" id="" class="form-control" width="200px" placeholder="confirmer votre email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="numero" id="" class="form-control" width="200px" placeholder="numero">
                        </div>
                        <div class="form-group">
                            <input type="password" name="mdp1" id="" class="form-control" width="200px" placeholder="mot de passe">
                        </div>
                        <div class="form-group">
                            <input type="password" name="mdp2" id="" class="form-control" width="200px" placeholder="Confirmer votre mot de passe">
                        </div>
                        
                      <br>
                            
                       
                        


                        <br>

                       


                          <button class="btn btn-primary" name="form_inscription">
                         
                                Inscription
                           
                          </button>
                            <br><br><br>
                            deja menmbre? <a href="index.php">Connectez-vous</a>. <br>
                            </div></div>
                    </form></form>
          </div>


          <div class="col-md-3">

          </div>
      </div>
  </div>
</center>
<br><br><br><br>



















