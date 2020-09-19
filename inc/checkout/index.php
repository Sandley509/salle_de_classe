<!DOCTYPE html>
<html lang="en">

<head>
    <title>Salle De Classe Checkout</title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Checkout - One Step Checkout , Responsive Bootstrap 4 template , bootstrap 4 starter template, bootstrap4 template, checkout template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" lang="en" content="Checkout Bootstrap 4 pricing template , Responsive and Modern HTML5 Template made from bootstrap 4.">
    <meta name="keywords" lang="en" content="pricing template, bootstrap 4 template,bootstrap 4 checkout template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="">
    <!--Font Awesome-->
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.min.css">
    <!--[if IE]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
</head>

<body>
    <div class="loader"></div>
    <header id="header">
        
    </header>
    <main id="main" role="main">
        <section id="checkout-banner">
            <div class="container py-5 text-center">
                <i class="fa fa-credit-card fa-3x "></i>
                <h2 class="my-3 text-black" style="color:#000">Payer Maintenant</h2>
                <p class="lead text-black" style="color:#000">Proceder au Payment de Votre Choix</p>
            </div>
        </section>
        <section id="checkout-container">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Vos Carte</span>
                            <span class="badge badge-secondary badge-pill">3</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">HTML5</h6>
                                    <small class="text-muted">Apprenez a creer des sites web en HTML5</small>
                                </div>
                                <span class="text-muted">100HT</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <!-- <div>
                                    <h6 class="my-0">Second produit</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">$8</span>
                            </li> -->
                            <!-- <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Third item</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">$5</span>
                            </li> -->
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>SCL0306</small>
                                </div>
                                <span class="text-success">-25HT</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (HT)</span>
                                <strong>HT100</strong>
                            </li>
                        </ul>
                        <form class="card p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Valider</button>
                                </div>
                            </div>
                        </form>
                        <div class="payment-methods">
                            <p class="pt-4 mb-2">Methode de paiement</p>
                            <hr>
                            <ul class="list-inline d-flex">
                             
                                <li class="mx-1 text-info">
                                    <i class="fa-2x fa fa-cc-paypal"></i>
                                </li>
                                <li class="mx-1 text-info">
                                 
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">INFO</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nom</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Prenom</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                           

                            <div class="mb-3">
                                <label for="email">Email
                                    <span class="text-muted"></span>
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="you@salledeClasse.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            
                            <hr class="mb-4">

                            <h4 class="mb-3">Payment</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Paypal</label>
                                </div>
                               
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">MonCash</label>
                                </div>
                            </div>
                            <div class="row">
                                
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">
                                <i class="fa fa-credit-card"></i> Payer maintenant</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-3" id="suggested-items">
            <div class="container">
                <div class="p-3 mb-2 bg-dark text-white">You May Also Like</div>
                <div class="row">
                    <div class="col col-md-3 d-flex mb-2">
                        <div class="card">
                            <img class="card-img-top img-fluid border-bottom" src="img/item-1.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Ladies Sandal</h5>
                                <p class="card-text">Exhibit a great fashion sense wearing these heels from the house of O.T. Collection.
                                </p>
                                <a href="#" class="btn btn-success">$23.99</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 d-flex mb-2">
                        <div class="card">
                            <img class="card-img-top img-fluid border-bottom" src="img/item-2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Gents Shoes</h5>
                                <p class="card-text">Make the rest look at you in admiration as you make your way by wearing these van sneakers
                                    from ASB.</p>
                                <a href="#" class="btn btn-success">$45.50</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 d-flex mb-2">
                        <div class="card">
                            <img class="card-img-top img-fluid border-bottom" src="img/item-3.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Ladies Sandal</h5>
                                <p class="card-text">Exhibit a great fashion sense wearing these heels from the house of O.T. Collection.
                                </p>
                                <a href="#" class="btn btn-success">$53.99</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 d-flex mb-2">
                        <div class="card">
                            <img class="card-img-top img-fluid border-bottom" src="img/item-4.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Gents Shoes</h5>
                                <p class="card-text">Make the rest look at you in admiration as you make your way by wearing these van sneakers
                                    from ASB.</p>
                                <a href="#" class="btn btn-success">$95.50</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" class="btn btn-primary scrollUp">
            <i class="fa fa-arrow-circle-o-up"></i>
        </a>
    </main>

    
    <form method="post" action="https://sandbox.moncashbutton.digicelgroup.com/Moncash-middleware/Checkout/{BusinessKey}" >
                                        <input type="text" name="amount" value="Montant"/>
                                        <input type="text" name="orderId" value="ordernumero"/>
                                        <input type="image" name="ap_image" width="90px" src="https://sandbox.moncashbutton.digicelgroup.com/Moncash-middleware/resources/assets/images/MC_button.png"/>
                                     </form>
    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">Made with
            <i class="fa fa-heart"></i> By
            <a target="_blank" title="Orbit Themes" href="http://www.orbitthemes.com">Orbit Themes</a> &copy;
            <span id="currentYear"></span> All Rights Reserved.
        </p>
        <div class="social">
            <a traget="_blank" href="https://facebook.com/orbitthemes" title="facebook">
                <i class="fa fa-facebook"></i>
            </a>
            <a traget="_blank" href="https://twitter.com/orbitthemes" title="twitter">
                <i class="fa fa-twitter"></i>
            </a>
            <a traget="_blank" href="https://plus.google.com/+orbitthemes" title="Google+" target="_blank">
                <i class="fa fa-google-plus"></i>
            </a>
            <a traget="_blank" href="https://github.com/orbitthemes" title="github" target="_blank">
                <i class="fa fa-github"></i>
            </a>
            <a traget="_blank" href="https://www.behance.net/orbitthemes" title="Behance" target="_blank">
                <i class="fa fa-behance"></i>
            </a>
            <a traget="_blank" href="https://dribbble.com/orbitthemes" title="Dribbble" target="_blank">
                <i class="fa fa-dribbble"></i>
            </a>
            <a traget="_blank" href="https://www.pinterest.com/orbitThemes/" title="Pinterest" target="_blank">
                <i class="fa fa-pinterest"></i>
            </a>
            <a traget="_blank" href="https://www.reddit.com/user/orbitthemes" title="Reddit" target="_blank">
                <i class="fa fa-reddit"></i>
            </a>
            <a traget="_blank" href="https://orbitthemes.com/blog/" title="RSS" target="_blank">
                <i class="fa fa-rss"></i>
            </a>
        </div>
    </footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="dist/jquery/jquery.min.js"></script>
    <script src="dist/popper/popper.min.js" integrity=""></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.min.js"></script>
</body>

</html>