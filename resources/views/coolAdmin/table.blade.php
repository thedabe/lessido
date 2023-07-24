
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
        <title>Tables</title>

        <!-- Fontfaces CSS-->
        <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
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
                            <a class="logo" href="index.php">
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
                            <li>
                                <a href="inscrire_e.php">
                                    <i class="far fa-check-square"></i>Inscrire Etudiant</a>
                            </li>
                            <li>
                                <a href="calendar.php">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li>

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
                            <li class="active">
                                <a href="table.php">
                                    <i class="fas fa-table"></i>Tables</a>
                            </li>
                            <li>
                                <a href="inscrire_e.php">
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
                <!-- END HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                                        <div class="item-2">
                                            <h4 id="list-item-1">Etudiants inscrits</h4>
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">

                                                    <tr>
                                                        <th>matricule</th>
                                                        <th>nom</th>
                                                        <th>prenom</th>
                                                        <th>e_mail</th>
                                                        <th>mot_de_passe</th>
                                                        <th>sexe</th>
                                                        <th>refuser</th>
                                                    </tr>
                                                    <?php
                                                    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['matricule'] . "</td>";
                                                        echo "<td>" . $row['nom'] . "</td>";
                                                        echo "<td>" . $row['prenom'] . "</td>";
                                                        echo "<td>" . $row['e_mail'] . "</td>";
                                                        echo "<td>" . $row['mot_de_passe'] . "</td>";
                                                        echo "<td>" . $row['sexe'] . "</td>";
                                                        echo "<td>" . '<form method="post"><input class="btn  btn-danger" type="submit" value="supprimer" name=' . $row['matricule'] . ' /></form>' . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    foreach ($_POST as $dab) {
                                                        if (isset($dab)) {
                                                            $ajout = array_search($dab, $_POST);
                                                            $carac = '$';
                                                            if (substr($ajout, -1) !== $carac) {
                                                                $chaine = substr($ajout, 0, -1);
                                                                $valid = "DELETE FROM etudiant WHERE  matricule ='$chaine' ";
                                                                $res = $idcnx->exec($valid);
                                                            }
                                                        }
                                                    }

                                                    $idcnx = null;
                                                    ?>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE -->
                                        <h3 class="title-5 m-b-35">Listes des enseignants</h3>
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="table table-borderless table-striped table-earning">

                                                <tr>
                                                    <th>code_ens</th>
                                                    <th>nom</th>
                                                    <th>prenom</th>
                                                    <th>contact</th>
                                                    <th>mot_de_passe</th>
                                                    <th>supprimer</th>
                                                    <th><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                                                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                                            </svg></button>
                                                        <div class="modal  p-5 fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">inscription admin</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post">
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">code_ens:</label>
                                                                                <input type="text" class="form-control" id="message-text" name="code_ens"></input>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="recipient-name" class="col-form-label">nom:</label>
                                                                                <input type="text" class="form-control" id="recipient-name" name="name_ens">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">Prenom:</label>
                                                                                <input type="text" class="form-control" id="message-text" name="prenom_ens"></input>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">contact:</label>
                                                                                <input type="email" class="form-control" id="message-text" name="contact_ens"></input>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="password" class="col-form-label">mot de passe:</label>
                                                                                <input type="password" class="form-control" id="message-text" name="password_ens"></input>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary" name="inscrire_ens">inscrire</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <?php
                                                while ($row = $resultat2->fetch(PDO::FETCH_ASSOC)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['code_ens'] . "</td>";
                                                    echo "<td>" . $row['nom'] . "</td>";
                                                    echo "<td>" . $row['prenom'] . "</td>";
                                                    echo "<td>" . $row['contact'] . "</td>";
                                                    echo "<td>" . $row['mot_de_passe'] . "</td>";
                                                    echo "<td>" . '<form method="post"><input class="btn  btn-danger" type="submit" value="supprimer" name=' . $row['code_ens'] . ' /></form>' . "</td>";
                                                    echo "</tr>";
                                                }
                                                foreach ($_POST as $dab) {
                                                    if (isset($dab)) {
                                                        $ajout = array_search($dab, $_POST);
                                                        $carac = "";
                                                        if (substr($ajout, -1) !== $carac) {
                                                            $valid = "DELETE FROM enseignant WHERE  code_ens ='$ajout' ";
                                                            $rese = $idcnx1->exec($valid);
                                                        }
                                                    }
                                                }

                                                $idcnx1 = null;
                                                ?>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h4 id="list-item-3">Listes des cours</h4>
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table class="table table-borderless table-striped table-earning">

                                                <tr>
                                                    <th>code_cours</th>
                                                    <th>intitule</th>
                                                    <th>coefficient</th>
                                                    <th>code_ens</th>
                                                    <th>supprimer</th>
                                                    <th><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                                                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                                            </svg></button>
                                                        <div class="modal  p-5 fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">ajouter cours</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post">
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">code_ens:</label>
                                                                                <input type="text" class="form-control" id="message-text" name="code_ens"></input>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="recipient-name" class="col-form-label">intitule:</label>
                                                                                <input type="text" class="form-control" id="recipient-name" name="intitule">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="message-text" class="col-form-label">code_ens:</label>
                                                                                <input type="text" class="form-control" id="message-text" name="code_ens"></input>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary" name="ajouter_cours">inscrire</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <?php
                                                while ($row = $resultat3->fetch(PDO::FETCH_ASSOC)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['code_cours'] . "</td>";
                                                    echo "<td>" . $row['intitule'] . "</td>";
                                                    echo "<td>" . $row['coefficient'] . "</td>";
                                                    echo "<td>" . $row['code_ens'] . "</td>";
                                                    echo "<td>" . '<form method="post"><input class="btn  btn-danger" type="submit" value="supprimer" name=' . $row['code_cours'] . ' /></form>' . "</td>";
                                                    echo "</tr>";
                                                }
                                                foreach ($_POST as $dab) {
                                                    if (isset($dab)) {
                                                        $ajout = array_search($dab, $_POST);
                                                        $carac = "";
                                                        if (substr($ajout, -1) !== $carac) {
                                                            $valid = "DELETE FROM cours WHERE  code_cours ='$ajout' ";
                                                            $rese = $idcnx2->exec($valid);
                                                        }
                                                    }
                                                }

                                                $idcnx2 = null;
                                                ?>
                                            </table>

                                        </div>
                                        <!-- END DATA TABLE-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

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