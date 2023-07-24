<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>page d'accueil LESSIDO</title>

        <!-- CSS FILES -->        
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('css/templatemo-kind-heart-charity.css')}}" rel="stylesheet">
<!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

    </head>
    
    <body id="section_1">

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="{{('images/logo.png')}}" class="logo img-fluid" alt="Kind Heart Charity">
                    <span>
                        <strong>LESSIDO</strong>
                        <small>Laverie pour tous</small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.blade.php">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">A propos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Missions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Volontaire</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="pageconnexion">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="hero-section hero-section-full-height">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{('images/slide/volunteer-helping-with-donation-box.jpg')}}" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>professionnel</h1>
                                            
                                            <p>professionnel dans le service </p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="{{('images/slide/volunteer-selecting-organizing-clothes-donations-charity.jpg')}}" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Etudiant</h1>
                                            
                                            <p>etre bien former</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="{{('images/slide/medium-shot-people-collecting-donations.jpg')}}" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1> Accueil</h1>
                                            
                                            <p>pour etre bien recu </p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Bienvenue sur LD</h2>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="pageconnexion.php" class="d-block">
                                    <img src="{{('images/icons/hands.png')}}" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Devenir <strong>Laveur</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="pageconnexion.php" class="d-block">
                                    <img src="{{('images/icons/heart.png')}}" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>le monde</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="donate.html" class="d-block">
                                    <img src="{{('images/icons/receive.png')}}" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">prend ton destin <strong>en main</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="pageconnexion.php" class="d-block">
                                    <img src="{{('images/icons/scholarship.png')}}" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>Programme</strong></p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding section-bg" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <img src="{{('images/group-people-volunteering-foodbank-poor-people.jpg')}}" class="custom-text-box-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h2 class="mb-2">Notre Objectif</h2>

                                <h5 class="mb-3">Former, Certifié</h5>

                                <p class="mb-0">This is a Bootstrap 5.2.2 CSS template for charity organization websites. You can feel free to use it. Please tell your friends about TemplateMo website. Thank you. HTML CSS files updated on 20 Oct 2022.</p>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box mb-lg-0">
                                        <h5 class="mb-3">notre Mission</h5>

                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor quis metus</p>

                                        <ul class="custom-list mt-2">
                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Cours
                                            </li>

                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                               Certification
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="2023" data-speed="1000"></span>
                                                <span class="counter-number-text"></span>
                                            </div>

                                            <span class="counter-text">Foundé</span>
                                        </div> 

                                        <div class="counter-thumb mt-4"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="20" data-speed="1000"></span>
                                            </div>

                                            <span class="counter-text">Membres</span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="about-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-5 col-12">
                            <img src="{{('images/dabe.jpg')}}" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-md-7 col-12">
                            <div class="custom-text-block">
                                <h2 class="mb-0">Dabe Louis</h2>

                                <p class="text-muted mb-lg-4 mb-md-4">Co-fondateur</p>

                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based</p>

                                <p>You are not allowed to redistribute this template ZIP file on any other template collection website. Please contact TemplateMo for more information.</p>

                                <ul class="social-icon mt-4">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">Donner son savoir. <br> aider.</h2>
                        </div>

                        <div class="col-lg-5 col-12">
                            <a href="#" class="me-4">envoyer son dossier</a>

                            <a href="#section_4" class="custom-btn btn smoothscroll">devenir Enseignant</a>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h2>Missions</h2>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{('images/causes/group-african-kids-paying-attention-class.jpg')}}" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Former des etudiants</h5>

                                        <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        
                                    </div>

                                    <a href="pageconnexion.php" class="custom-btn btn">commencer</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <img src="{{('images/causes/photo.jpg')}}" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Cerification</h5>

                                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus tempor</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        
                                    </div>

                                    <a href="pageconnexion.php" class="custom-btn btn">commencer</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-block-wrap">
                                <img src="{{('images/causes/photo2.jpg')}}" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Mettre en contact etudiant et prof</h5>

                                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>

                                        <div class="progress mt-4">
                                            <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        
                                    </div>

                                    <a href="pageconnexion.php" class="custom-btn btn">commencer</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="volunteer-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-4">Volontaire</h2>

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <h3 class="mb-4">Devenir Enseignant un jour</h3>

                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="Jack Doe" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Subject" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="input-group input-group-file">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            
                                            <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                            <i class="bi-cloud-arrow-up ms-auto"></i>
                                        </div>
                                    </div>
                                </div>

                                <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                                <button type="submit" class="form-control">Submit</button>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <img src="{{('images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg')}}" class="volunteer-image img-fluid" alt="">

                            <div class="custom-block-body text-center">
                                <h4 class="text-white mt-lg-3 mb-lg-3">A propos du volontariat</h4>

                                <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="testimonial-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="mb-lg-3">Conseils</h2>
                            
                                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                           <div class="carousel-caption">
                                                <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Maria</span>, Boss</small>
                                           </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Thomas</span>, Partner</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito charity theme</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Jane</span>, Advisor</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor mauris quis metus tempor orci</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">Bob</span>, Entreprenuer</small>
                                           </div>
                                        </div>

                                          <ol class="carousel-indicators">
                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                                    <img src="{{('images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg')}}" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                                    <img src="{{('images/avatar/portrait-young-redhead-bearded-male.jpg')}}" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                                    <img src="{{('images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg')}}" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                                    <img src="{{('images/avatar/studio-portrait-emotional-happy-funny.jpg')}}" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>
                                          </ol>

                                 </div>
                            </div>
                        </div>

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
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Notre Objectif</a></li>
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Missions</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Devenir  Enseignant</a></li>

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

                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
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
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/click-scroll.js')}}"></script>
        <script src="{{asset('js/counter.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>

    </body>
</html>