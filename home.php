<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flood Hotspots Monitoring System</title>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: "Times New Roman", Times, serif;
        }

        body {
            background-color: #f3f5fa;
        }


@media screen and (max-width: 1200px) {
  body {
    background-color: lightgray;
    font-size: 10px;
  }
}

/* Small Desktop / Large Tablet */
@media screen and (max-width: 992px) {
  body {
    background-color: lightblue;
    font-size: 10px;
  }
}

/* Medium Tablet */
@media screen and (max-width: 768px) {
  .title {
    font-size: 15px; /* Larger text for desktops */
  }
}

/* Small Tablet / Large Smartphone */
@media screen and (max-width: 576px) {
  .logo img {
    height: 33px; /* Smaller logo size for phones */
  }
  .title {
    font-size: 12px; /* Adjust font size for smaller devices */
  }
}

/* Small Smartphone */
@media screen and (max-width: 400px) {
  .title {
    font-size: 10px; /* Adjust font size for smaller devices */
  }
}

/* Non-smartphone Telephone (smallest screens, e.g., feature phones) */
@media screen and (max-width: 240px) {
  .title {
    font-size: 2px; /* Adjust font size for smallest devices */
  }
}

.modal-dialog {
  margin-top: 150px;
}

.modal-dialog-centered {
  display: block; /* Override flex display */
  align-items: flex-start; /* Default alignment */
  min-height: auto; /* Remove the minimum height */
}

.modal-content {
  margin: 0 auto;
  max-height: 90vh; /* Added to limit the height of the modal content */
  overflow-y: auto; /* Allows scrolling if content overflows */
}


        main {
            flex-grow: 1;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .hero-img img {
            max-width: 100%;
        }

        .content {
            text-align: justify;
        }

        @media (max-width: 767px) {
            .hero-img {
                text-align: center;
            }
        }

        .modal-dialog {
            margin-top: 150px;
        }

        .modal-dialog-centered {
            display: block;
            align-items: flex-start;
            min-height: auto;
        }

        .modal-content {
            margin: 0 auto;
            max-height: 90vh;
            overflow-y: auto;
        }

     
        /* Main content area should grow to fill available space */
        .page-wrapper {
            flex: 1;
            margin-top: 10px; /* Margin at the top of the content */
        }

        /* Footer styles */
        footer {
            background-color: #0072bc;
            color: white;
            padding: 10px 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            position: sticky; /* Stick the footer at the bottom of the viewport */
            bottom: 0;
            left: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            width: 100%;
        }

        footer p {
            font-size: 12px;
            margin: 0;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px; /* Default margin */
        }

        .col {
            flex: 1;
            padding: 0 15px;
            text-align: center;
        }

        /* Media Queries */
        @media (min-width: 1200px) {
            .row {
                margin: 0 -15px; /* Default margin for large screens */
            }
        }

        @media (max-width: 1199px) {
            .row {
                margin: 0 -10px; /* Adjust margin for medium screens */
            }
        }

        @media (max-width: 768px) {
            .row {
                margin: 0 -5px; /* Adjust margin for small screens */
            }
        }

        @media (max-width: 480px) {
            .row {
                margin: 0; /* Remove margin for very small screens */
            }
        }


    </style>
</head>

<body>
    <!-- Header -->
   <header id="header" class="sticky-top header-inner-pages" style="background: #0072bc;">
    <div class="container d-flex align-items-center">
        <h5 style="font-weight: bold; margin-left: -20px;" class="logo me-auto">
            <a href="#"><img src="images/logo_New.PNG" alt="Logo"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="title" style="color: white;" data-translate="title">Flood Hotspots Monitoring System</label>
        </h5>

        <nav id="navbar" class="navbar">
            <ul>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<span data-translate="language">Language</span>
  </a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item lang" href="#" data-lang="en">English</a></li>
<li><a class="dropdown-item lang" href="#" data-lang="kin">Kinyarwanda</a></li>
<li><a class="dropdown-item lang" href="#" data-lang="fr">French</a></li>
 </ul>
</li>
<li><a class="getstarted scrollto btn-popup4" href="#" data-translate="login">Login</a></li>
</ul>

             <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
    </div>
</header><!-- End Header -->


    <!-- Main Content -->
    <main id="main">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="content">
                            <h5 style="font-weight: bold;"><center data-translate="welcome">Welcome to Flood Hotspots Monitoring System</center></h5>
                            <p data-translate="description">
                                This System is designed to address the severe damage to property, infrastructure, and the environment caused by flooding in Rwanda. To mitigate these impacts, this system enhances the Rwanda Water Resources Board’s (RWB) ability to monitor and respond to flood events effectively. It provides a robust, user-friendly platform for accurately reporting flood hotspots and erosion risks, enabling efficient data collection, analysis, and management.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h5 style="font-weight: bold;"><center data-translate="guide">System User's Guide</center></h5>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row mt-2">
                <div class="col text-center">
                    <p data-translate="footer">&copy; <?php echo date("Y"); ?> Rwanda Water Resources Board.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal fade" id="custModal4" tabindex="-1" aria-labelledby="custModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title" id="custModalLabel4" data-translate="login_title">LOGIN TO SYSTEM</label>
                    <button type="button" class="btn-close btn-sm btn-outline-danger" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="loginModalBody">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <form method="POST" action="" onsubmit="return checkForm(this);">
                                    <div class="card-body">
                                        <span data-translate="email">Email</span>
                                        <input type="email" name="email" class="form-control" required=""> 
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <span data-translate="password">Password</span>
                                                <input type="password" name="pwd1" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>   
                                    <input type="submit" onclick="myFunction()" name="submit" class="btn btn-info text-light form-control" value="SignIn">
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <center>
                        <a href="#" id="forgetPasswordLink" data-translate="forget_password">Forget Password?</a>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- Forget Password Modal -->
    <div class="modal fade" id="custModal3" tabindex="-1" aria-labelledby="custModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title" id="custModalLabel" data-translate="forget_password_title">FORGET PASSWORD</label>
                    <button type="button" class="btn-close btn-sm btn-outline-danger" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="registerModalBody">
                    <label data-translate="email">Email</label>
                    <input type="text" name="firstname" class="form-control"> <br>
                    <center>
                    
                     <input type="submit" onclick="myFunction()" name="submit" class="btn btn-info text-light form-control" value="Send Link">
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                        <br>
                        <a href="#" id="backToLoginLink" data-translate="back_to_login">Back to Login</a>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- External JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        const translations = {
            en: {
                login_title: "LOGIN TO SYSTEM",
                email: "Email",
                password: "Password",
                forget_password: "Forget Password?",
                forget_password_title: "FORGET PASSWORD",
                back_to_login: "Back to Login",
                language: "Language",
                login: "Login",
                title: "Flood Hotspots Monitoring System",
                welcome: "Welcome to Flood Hotspots Monitoring System",
                description: "This System is designed to address the severe damage to property, infrastructure, and the environment caused by flooding in Rwanda. To mitigate these impacts, this system enhances the Rwanda Water Resources Board’s (RWB) ability to monitor and respond to flood events effectively. It provides a robust, user-friendly platform for accurately reporting flood hotspots and erosion risks, enabling efficient data collection, analysis, and management.",
                guide: "System User's Guide",
                // footer: "&copy; " + new Date().getFullYear() + " Rwanda Water Resources Board."

            },
            kin: {
                login_title: "KWINJIRA MURI SISTEME",
                email: "Imeyili",
                password: "Ijambo ry'ibanga",
                forget_password: "Wibagiwe Ijambo ry'ibanga?",
                forget_password_title: "WIBAGIWE IJAMBO RY'IBANGA",
                back_to_login: "Subira muri Login",
                language: "Ururimi",
                login: "Injira",
                title: "Sisiteme yo Kureba Ahantu Hagera Imvura n'Ahantu Hahindutse",
                welcome: "Murakaza Neza muri Sisiteme yo Kureba Ahantu Hagera Imvura n’Ahantu Hahindutse",
                description: "Iyi Sisiteme yagenewe gukemura ibyangiritse bikomeye ku mutungo, ku bwubatsi, no ku bidukikije biterwa n’imvura nyinshi mu Rwanda. Kugira ngo hagabanywe izi ngaruka, iyi sisiteme irongera ubushobozi bwa Rwanda Water Resources Board (RWB) bwo gukurikirana no gusubiza ibibazo by’imvura nyinshi mu buryo bwiza. Itanga urubuga rukomeye, rukorohereza, rwo gutanga amakuru y’ahantu hagera imvura n’ahantu hahindutse, bigafasha mu gukusanya, gusesengura, no gucunga amakuru neza.",
                guide: "Uko Sisiteme ikoreshwa",
                // footer: "&copy; " + new Date().getFullYear() + " Rwanda Water Resources Board."
            },
            fr: {
                login_title: "CONNEXION AU SYSTÈME",
                email: "Email",
                password: "Mot de passe",
                forget_password: "Mot de passe oublié?",
                forget_password_title: "MOT DE PASSE OUBLIÉ",
                back_to_login: "Retour à la connexion",
                language: "Langue",
                login: "Connexion",
                title: "Système de Surveillance des Zones à Risque d'Inondation",
                welcome: "Bienvenue dans le Système de Surveillance des Zones à Risque d'Inondation",
                description: "Ce système est conçu pour remédier aux graves dommages causés aux biens, aux infrastructures et à l'environnement par les inondations au Rwanda. Pour atténuer ces impacts, ce système améliore la capacité de la Rwanda Water Resources Board (RWB) à surveiller et à répondre efficacement aux événements d'inondation. Il fournit une plateforme robuste et conviviale pour signaler avec précision les zones à risque d'inondation et les risques d'érosion, permettant ainsi une collecte, une analyse et une gestion efficaces des données.",
                guide: "Guide de l'utilisateur du système",
                // footer: "&copy; " + new Date().getFullYear() + " Rwanda Water Resources Board."
            }
        };

        $(document).ready(function() {
            $('.btn-popup3').click(function() {
                $('#custModal3').modal('show');
            });

            $('.btn-popup4').click(function() {
                $('#custModal4').modal('show');
            });

            $('#forgetPasswordLink').click(function(e) {
                e.preventDefault();
                $('#custModal4').modal('hide');
                $('#custModal3').modal('show');
            });

            $('#backToLoginLink').click(function(e) {
                e.preventDefault();
                $('#custModal3').modal('hide');
                $('#custModal4').modal('show');
            });

            $('.lang').click(function(e) {
                e.preventDefault();
                const lang = $(this).data('lang');
                translatePage(lang);
            });
        });

        function translatePage(lang) {
            $('[data-translate]').each(function() {
                const key = $(this).data('translate');
                $(this).text(translations[lang][key]);
            });
        }
    </script>
</body>
</html>


<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>