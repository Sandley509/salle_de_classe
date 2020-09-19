
<?php include('nav.php');  ?>


    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(../img/bg-img/bg1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Bienvenue!!!  <span class="text-primary"><?php echo$_SESSION['pseudo'];  ?></span> dans la Salle de Classe Commencer a etudier</h2>
                        <a href="cours.php" class="btn clever-btn">Parcourir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->







 <!-- ##### Cours Populaires Commencement ##### -->
 <section class='popular-courses-area section-padding-100-0' style='background-image: url(img/core-img/texture.png);'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <div class='section-heading'>
                        <h3>Cours Les plus Populaires</h3>
                    </div>
                </div>
            </div>

            <div class='row'>
                <!-- Single Popular Course -->
                <div class='col-12 col-md-6 col-lg-4'>
                    <div class='single-popular-course mb-100'>
                        <img src='../img/bg-img/signes.jpg'>
                        <!-- Course Content -->
                        <div class='course-content'>
                            <h4> name='Cours_title' Languages Des Signes</h4>
                            <div class='meta d-flex align-items-center'>
                                <a href='#'> Pierre Hedruche </a>
                                <span><i class='fa fa-circle' aria-hidden='true'></i></span>
                                <a href='#'> &amp;Communication </a>
                            </div>
                            <p>Apprenez Le Languages des Signes avec Le Professeur Pierre Hedruche ...</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class='seat-rating-fee d-flex justify-content-between'>
                            <div class='seat-rating h-100 d-flex align-items-center'>
                                <div class='seat'>
                                    <i class='fa fa-user' aria-hidden='true'></i> 10
                                </div>
                                <div class='rating'>
                                    <i class='fa fa-star' aria-hidden='true'></i> 4.5
                                </div>
                            </div>
                            <div class='course-fee h-100'>
                             <form action='enroll.php' method='post'>
                             <button type='enroll'>

                                <a href='1_signes.php' class='free'>Gratuit</a>
                                </button>
                             </form>
                            </div>
                        </div>
                    </div>
                </div>

   <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="../img/bg-img/soin.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Premier Soin</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Emilus Laplais</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Soin&amp; Santer</a>
                            </div>
                            <p>Suivez Ce Cours De Premier Soin avec Le Docteur Emilus Laplais...</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#">Gratuit</a>
                            </div>
                           
                        </div>
                    </div>
                </div>

            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="../img/bg-img/soin.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Premier Soin</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Emilus Laplais</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Soin&amp; Santer</a>
                            </div>
                            <p>Suivez Ce Cours De Premier Soin avec Le Docteur Emilus Laplais...</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#">Gratuit</a>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Cours Populaires Fin##### -->
    <!-- ##### Cours les plus populaires partie 2 ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Developpement Web</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="../img/bg-img/html5.png" alt="" class="img-fluid">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Html5</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sandley Estalien</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Developpement&amp;web</a>
                            </div>
                            <p>Dans ce cours, vous allez apprendre les bases de la creation de site le languages mere...</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <button class="btn bg-danger text-white">

                                <i class="fa fa-plus" aria-hidden="true"> Panier</i> 
                                </button>
                            
                            </div>
                            
                            <div class="course-fee h-100">
                                <a href="checkout/index.php" class="free">20$</a>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="../img/bg-img/css3.png" alt="" class="img-fluid">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>CSS3</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sandley Estalien</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Developpemtn&amp;Web</a>
                            </div>
                            <p>Dans ce Cours Vous allez apprendre a styliser vos pages web avec Css3...</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <button class="btn bg-danger text-white">

                                <i class="fa fa-plus" aria-hidden="true"> Panier</i> 
                                </button>
                            
                            </div>
                            <div class="course-fee h-100">
                                <a href="checkout/index.php">$20</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100">
                        <img src="../img/bg-img/php.png" alt="" class="img-fluid">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>PHP</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sandley Estalien</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Les Bases&amp; De Php</a>
                            </div>
                            <p>Dans Ce cours Vous allez Decouvrir php,Vous Allez apprendre Les bases de Php et au fur a mesure que vous realiserez des TP Vous vous Familiariserz avec Ce Languages a normalizer_get_raw_decomposition
                            Que Ce Cours n'est qu'une introduction a la Programmation en Php Tres Bientot il y aura d'autres Cours plus avancer ...</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="checkout/index.php">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Courses End ##### -->

   <?php include('footer.php');?>