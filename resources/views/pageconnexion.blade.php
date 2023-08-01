
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">


    <title>page de connexion</title>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>

    <!-- CSS FILES -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('css/templatemo-kind-heart-charity.css')}}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="{{('images/logo.png')}}" class="logo img-fluid" alt="">
                <span>
                    <strong>LESSIDO</strong>
                    <small>Laverie Pour Tous</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index#section_2">A propos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index#section_3">Missions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index#section_4">Candidat</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="pageconnexion">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <section class="vh-100 ">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                        <div class="card-body p-5 text-center">

                                            <form method="post" action="">
                                                <div class="mb-md-5 mt-md-4 pb-5">

                                                    <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
                                                    <p class="text-white-50 mb-5">entrez vos identifiant</p>

                                                    <div class="form-outline form-white mb-4">
                                                        <input type="text" id="id" name="id" class="form-control form-control-lg" />
                                                        <label class="form-label" for="id">identifiant</label>
                                                    </div>

                                                    <div class="form-outline form-white mb-4">
                                                        <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                                                        <label class="form-label" for="typePasswordX">mot de passe</label>
                                                    </div>

                                                    <div>
                                                        <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="motdepasse">mot de passe oublié?</a></p>

                                                        <button class="btn btn-outline-light btn-lg px-5" type="submit" name="connexion" value="connexion">connexion</button>
                                                    </div>

                                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                                    </div>

                                                </div>
                                            </form>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="{{('images/logo.png')}}" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">notre objectif</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Missions</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Devenir Employé</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">partenaire avec nous</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: 0768070982" class="site-footer-link">
                            0768070982
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:houedouobidabe@gmail.com" class="site-footer-link">
                            houedouobidabe@gmail.com
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        BP 1093 yakro
                    </p>

                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2036 <a href="#">LESSIDO</a> .
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/counter.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>