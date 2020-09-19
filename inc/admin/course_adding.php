<?php 
    include('dbconnection.php');
    include('nav.php');
    



    echo"You are Logged in as administrator";
    


?>

    <!-- Input course adding -->
   <div class="container">
    <div class="row">
        <div class="col-lg-6">
                            <form action="inc/course_adding.inc.php" method="Post">
                        <div class="well bg-primary text-white text-center mt-5 ">
                            <h2 style="color:#fff">Ajouter votre nouveau Cours</h2>
                        </div>
                        <br>
                            <div class="form-group">
                                <input type="text" name="titre" id="" class="form-control" placeholder="Titre de Votre cours" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Professeur" id="" class="form-control" placeholder="Professeur" required>
                            </div>
                            <div class="form-group">
                                <textarea name="textarea"
                                rows="5" cols="50" required>Description du cours </textarea>
                            </div>
                            <div class="form-group">
                            Image de votre cours
                                <input type="file" name="photo" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Price" id="" placeholder="Prix de votre cours" class="form-control">
                            </div>
                            
                               
                            
                            
                        <br>

                            <div>

                            <button class="btn btn-primary" type="add" name="submit">
                            Continue
                            </button>
                            <br><br><br>




                        </form>
        </div>

        <div class="col-lg-6">
        </div>
    
    </div>
    
   
   </div>
   </div>



<?php include('footer.php');?>