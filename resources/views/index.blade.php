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
    <link rel="stylesheet" href="{{asset('inscription.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/templatemo-kind-heart-charity.css')}}" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
    <!-- message afficher après inscription d'un.e lessido -->

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
                        <a class="nav-link click-scroll" href="index">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">A propos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Missions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Candidater</a>
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
                                    <img src="{{('images/slide/hommeveste2.jpg')}}" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <div class="d-flex flex-column justify-content-end">
                                            <h1> sans vous <br> déplacer ! </h1>

                                            <p>Commandez maintenant un.e lessido qui viendra <br>laver vos vêtements correctement et payez par kilo ! </p>
                                            <div class="d-flex justify-content-end">
                                                <a class=" custom-btn custom-border-btn btn" href="#index10" style="width: 10em;">je commande</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{('images/slide/volunteer-selecting-organizing-clothes-donations-charity.jpg')}}" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Gagnez <br> + d'argent !</h1>
                                        <p>Inscrivez vous pour <br>devenir Lessido et gagnez de l'argent <br> seulement en lavant des vêtements à domicile </p>
                                        <div class="d-flex justify-content-end">
                                            <a class=" custom-btn custom-border-btn btn" href="#section_4" style="width: 10em;">je m'Inscris</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{('images/slide/medium-shot-people-collecting-donations.jpg')}}" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1> service</h1>

                                        <p>Un service de qualité à porter de main </p>
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
        <section class="vh-100 gradient-custom" id="index10">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">commander</h3>
                                <form method="post" action="/commander/ajouter">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" name="prenom" id="prenom" class="form-control form-control-lg" required />
                                                <label class="form-label" for="prenom">Prenom</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" name="lieu" id="lieu" class="form-control form-control-lg" required />
                                                <label class="form-label" for="lieu">lieu de Ramassage</label>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label for="poids">poids des vêtements :</label>
                                                <select id="poids" name="poids">
                                                    <option value="poids1">0-5KG</option>
                                                    <option value="poids2">5-10KG</option>
                                                    <option value="poids3">10-15KG</option>
                                                    <option value="poids4">15-20KG</option>
                                                    <option value="poids5">20KG et plus</option>
                                                    <option value="poids6">je ne sais pas</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="text" name="contact_client" id="contact_client" class="form-control form-control-lg" required />
                                                <label class="form-label" for="contact_client">Contact</label>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="mt-4 pt-2">
                                        <input class="btn btn-primary btn-lg" type="submit" value="valider" name="valider" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Bienvenue sur LESSIDO</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="pageconnexion" class="d-block">
                                <img src="{{('images/icons/phone.png')}}" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">commander en ligne </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="pageconnexion" class="d-block">
                                <img src="{{('images/icons/pay.png')}}" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">tous moyens de payement-payement sans Contact</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="pageconnexion" class="d-block">
                                <img src="{{('images/icons/service-client.png')}}" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">service client disponible 7j/7</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="pageconnexion" class="d-block">
                                <img src="{{('images/icons/moto.png')}}" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Livraison à domicile</p>
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

                            <h5 class="mb-3">Offrir un service de qualité</h5>

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
                                            Laver
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Livrer
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
                        <h2 class="mb-0">Obtenir un emploi</h2>
                    </div>

                    <div class="col-lg-5 col-12">
                        <a href="#" class="me-4">envoyer son dossier</a>

                        <a href="#section_4" class="custom-btn btn smoothscroll">devenir Livreur ou Laveur</a>
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
                            <img src="{{('images/causes/commandé.jpg')}}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">commander depuis son canapé</h5>

                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>


                                </div>

                                <a href="pageconnexion" class="custom-btn btn">commencer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="{{('images/causes/linge.jpg')}}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Lavage efficace</h5>

                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus tempor</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>


                                </div>

                                <a href="pageconnexion" class="custom-btn btn">commencer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="{{('images/causes/livraison.jpg')}}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Livraison à domicile</h5>

                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>


                                </div>

                                <a href="pageconnexion" class="custom-btn btn">commencer</a>
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
                        <h2 class="text-white mb-4">Candidat</h2>
                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="/candidater/lessidos" method="post" role="form"  enctype="multipart/form-data">
                            <h3 class="mb-4">Devenir Employé chez LESSIDO</h3>
                            @if (session('status2'))
                            <div class="alert alert-sucess">
                                {{session('status2')}}
                            </div>
                            @endif
                            @csrf
                            @foreach($errors->All() as $error)
                            <div class="alert alert-sucess">
                                {{$error}}
                            </div>
                            @endforeach

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="nom_lessidos" id="nom_lessidos" class="form-control" placeholder="nom" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="prenom_lessidos" id="prenom_lessidos" class="form-control" placeholder="prenom" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="tel" name="contact_lessidos" id="contact_candidat" class="form-control" pattern="[0-9]+" placeholder="contact" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="lieu_habitation" class="form-control" id="lieu_habitation" placeholder="lieu d'habitation" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label for="dateNaissance">Date de naissance :</label>
                                    <input type="date" name="datenaissance" class="form-control" id="datenaissance" placeholder="date de naissance" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label for="pieceIdentiteRecto">Pièce d'identité (recto) :</label>
                                    <input type="file" id="pieceIDRecto" name="pieceIDRecto" accept=".jpg, .jpeg, .png, .pdf" required><br>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="pieceIDVerso">Pièce d'identité (verso) :</label>
                                    <input type="file" id="pieceIDVerso" name="pieceIDVerso" accept=".jpg, .jpeg, .png, .pdf" required><br>
                                </div>
                            </div>
                            <div>

                            </div>

                            <div class="row">
                                <button type="submit" class="form-control">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12">
                        <img src="{{('images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg')}}" class="volunteer-image img-fluid" alt="">

                        <div class="custom-block-body text-center">
                            <h4 class="text-white mt-lg-3 mb-lg-3">A propos de la Candidature</h4>

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