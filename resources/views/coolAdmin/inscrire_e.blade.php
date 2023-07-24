
<!DOCTYPE php>
<php lang="fr">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Forms</title>

        <!-- Fontfaces CSS-->
        <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="dashboardAdmin.php">
                                <img src="{{('coolAdmin/images/icon/logo.png')}}" alt="CoolAdmin" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                            </li>
                            <li>
                                <a href="stats.php">
                                    <i class="fas fa-chart-bar"></i>stats</a>
                            </li>
                            <li>
                                <a href="table.php">
                                    <i class="fas fa-table"></i>Tables</a>
                            </li>
                            <li>
                                <a href="form.php">
                                    <i class="far fa-check-square"></i>Inscrire Etudiant</a>
                            </li>
                            <li>
                                <a href="calendar.php">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="{{('coolAdmin/images/icon/logo.png')}}" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <a class="js-arrow" href="dashboardAdmin.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                            </li>
                            <li>
                                <a href="stats.php">
                                    <i class="fas fa-chart-bar"></i>stats</a>
                            </li>
                            <li>
                                <a href="table.php">
                                    <i class="fas fa-table"></i>Tables</a>
                            </li>
                            <li class="active">
                                <a href="form.php">
                                    <i class="far fa-check-square"></i>Inscrire Etudiant</a>
                            </li>
                            <li>
                                <a href="calendar.php">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-comment-more"></i>
                                            <span class="quantity">1</span>
                                            <div class="mess-dropdown js-dropdown">
                                                <div class="mess__title">
                                                    <p>You have 2 news message</p>
                                                </div>
                                                <div class="mess__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{('coolAdmin/images/icon/avatar-06.jpg')}}" alt="Michelle Moreno" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Michelle Moreno</h6>
                                                        <p>Have sent a photo</p>
                                                        <span class="time">3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="mess__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{('coolAdmin/images/icon/avatar-04.jpg')}}" alt="Diane Myers" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Diane Myers</h6>
                                                        <p>You are now connected on message</p>
                                                        <span class="time">Yesterday</span>
                                                    </div>
                                                </div>
                                                <div class="mess__footer">
                                                    <a href="#">View all messages</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-email"></i>
                                            <span class="quantity">1</span>
                                            <div class="email-dropdown js-dropdown">
                                                <div class="email__title">
                                                    <p>You have 3 New Emails</p>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{('coolAdmin/images/icon/avatar-06.jpg')}}" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, 3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{('coolAdmin/images/icon/avatar-05.jpg')}}" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, Yesterday</span>
                                                    </div>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{('coolAdmin/images/icon/avatar-04.jpg')}}" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, April 12,,2018</span>
                                                    </div>
                                                </div>
                                                <div class="email__footer">
                                                    <a href="#">See all emails</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <span class="quantity">3</span>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>You have 3 Notifications</p>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a email notification</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c2 img-cir img-40">
                                                        <i class="zmdi zmdi-account-box"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>Your account has been blocked</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c3 img-cir img-40">
                                                        <i class="zmdi zmdi-file-text"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a new file</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__footer">
                                                    <a href="#">All notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="{{('coolAdmin/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#">john doe</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="{{('coolAdmin/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#">john doe</a>
                                                        </h5>
                                                        <span class="email">johndoe@example.com</span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-account"></i>Accueil</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>parametre</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-money-box"></i>profil</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-power"></i>Deconnexion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <section class="vh-100 gradient-custom">
                        <div class="container py-5 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-12 col-lg-9 col-xl-7">
                                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                        <div class="card-body p-4 p-md-5">
                                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Inscription</h3>
                                            <form method="post" action="">

                                                <div class="row">
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">
                                                            <input type="text" name="nom" id="nom" class="form-control form-control-lg" required />
                                                            <label class="form-label" for="nom">Nom</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-outline">
                                                            <input type="text" name="prenom" id="prenom" class="form-control form-control-lg" required />
                                                            <label class="form-label" for="prenom">Prenom</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                                        <div class="form-outline datepicker w-100">
                                                            <input type="date" class="form-control form-control-lg" name="birthdayDate" id="birthdayDate" required />
                                                            <label for="birthdayDate" class="form-label">date de naissance</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4">

                                                        <h6 class="mb-2 pb-1">Sexe: </h6>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="feminin" checked />
                                                            <label class="form-check-label" for="femaleGender">Feminin</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="masculin" />
                                                            <label class="form-check-label" for="maleGender">Masculin</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="autre" />
                                                            <label class="form-check-label" for="otherGender">autre</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4 ">

                                                        <div class="form-outline">
                                                            <input type="email" name="emailAddress" id="emailAddress" class="form-control form-control-lg" required />
                                                            <label class="form-label" for="emailAddress">Email</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4 ">

                                                        <div class="form-outline">
                                                            <input type="text" name="mat" id="mat" class="form-control form-control-lg" required />
                                                            <label class="form-label" for="mat">Matricule</label>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">


                                                    <div class="col-md-6 mb-4 ">

                                                        <div class="form-outline">
                                                            <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                                                            <label class="form-label" for="password">mot de passe</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4 ">

                                                        <div class="form-outline">
                                                            <input type="password" name="repass" id="repass" class="form-control form-control-lg" required />
                                                            <label class="form-label" for="repass">confirmer mot de passe</label>
                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="form-outline">
                                                    <input type="text" name="class" id="class" class="form-control form-control-lg" required />
                                                    <label class="form-label" for="class">classe</label>
                                                </div>
                                                <div class="mt-4 ">
                                                    <input class="btn btn-primary btn-lg" type="submit" value="valider" name="valider" />
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Jquery JS-->
                    <script src="{{asset('coolAdmin/vendor/jquery-3.2.1.min.js')}}"></script>
                    <!-- Bootstrap JS-->
                    <script src="{{asset('coolAdmin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
                    <script src="{{asset('coolAdmin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
                    <!-- Vendor JS       -->
                    <script src="{{asset('coolAdmin/vendor/slick/slick.min.js')}}">
                    </script>
                    <script src="{{asset('coolAdmin/vendor/wow/wow.min.js')}}"></script>
                    <script src="{{asset('coolAdmin/vendor/animsition/animsition.min.js')}}"></script>
                    <script src="{{asset('coolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
                    </script>
                    <script src="{{asset('coolAdmin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
                    <script src="{{asset('coolAdmin/vendor/counter-up/jquery.counterup.min.js')}}">
                    </script>
                    <script src="{{asset('coolAdmin/vendor/circle-progress/circle-progress.min.js')}}"></script>
                    <script src="{{asset('coolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
                    <script src="{{asset('coolAdmin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
                    <script src="{{asset('coolAdmin/vendor/select2/select2.min.js')}}">
                    </script>

                    <!-- Main JS-->
                    <script src="{{asset('js/main.js')}}"></script>

    </body>

</php>
<!-- end document-->