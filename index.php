<?php
session_start();
if (isset($_POST['send'])) {
    // variable extraction
    extract($_POST);
    // check variables and assign error messages    
    if (
        isset($nom) && $nom != "" &&
        isset($email) && $email != "" &&
        isset($sujet) && $sujet != "" &&
        isset($message) && $message != ""
    ) {
        // send email
        // receiver email address
        $to = "vianney.giovannelli.simplon@gmail.com";
        $subject = "Vous avez reçu un message de : " . $email;

        $message = "
            <p>Vous avez reçu un messade de <strong>" . $email . "</strong></p>
            <p><strong>Nom : </strong>" . $nom . "</p>
            <p><strong>Sujet : </strong>" . $sujet . "</p>
            <p><strong>Message : </strong>" . $message . "</p>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <.$email.>' . "\r\n";

        mail($to, $subject, $message, $headers);
        // success message
        if ($send) {
            $_SESSION['success_message'] = "Votre message a bien été envoyé";
        } else {
            $info = "Votre message n'a pas pu être envoyé";
        }
    } else {
        // error message
        $info = "Veuillez remplir tous les champs";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIOVANNELLI Vianney Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/CSS/aos.css">
    <link rel="stylesheet" href="./Assets/CSS/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
                <span class="h3 fw-bold d-block d-lg-none">Vianney <br>GIOVANNELLI</span>
                <img src="./Assets/images/moi.jpg" class="d-none d-lg-block rounded-circle" alt="photo de profil">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Qui suis-je?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#techno">Techno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Me contacter</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- // NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">
        <!-- HOME -->
        <section id="home" class="full-height px-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-4 fw-bold" data-aos="fade-up">Je suis un <span class="text-brand">Concepteur
                                Développeur
                                d'Application Fullstack</span> de France</h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">En tant que développeur
                            fullstack junior, ma passion pour la création
                            d'expériences interactives innovantes s'accompagne d'une motivation à apprendre
                            continuellement et à rester au sommet de mes compétences pour offrir des solutions
                            techniques de qualité.</p>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <a href="#work" class="btn btn-brand me-3">Consultez mon travail</a>
                            <a href="#contact" class="link-custom">Vianney.giovannelli@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // HOME -->

        <!-- SERVICES -->
        <section id="services" class="full-height px-lg-5">
            <div class="container">
                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">SERVICES</h6>
                        <h1>Services que je fournis</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Développement d'applications sur mesure</h5>
                            <p>Création d'applications personnalisées en fonction des besoins spécifiques.</p>
                            <a href="#" class="link-custom">En savoir plus...</a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-solid fa-feather"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Services de design</h5>
                            <p>Conception des interfaces utilisateur attrayantes et conviviales pour les applications et
                                les sites web</p>
                            <a href="#" class="link-custom">En savoir plus...</a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-wordpress"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Personnalisation de sites WordPress</h5>
                            <p>Création, personnalisation et gestion de sites web WordPress. </p>
                            <a href="#" class="link-custom">En savoir plus...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // SERVICES -->

        <!-- WORK -->
        <section id="work" class="full-height px-lg-5">
            <div class="container">
                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">PROJETS</h6>
                        <h1>Mes récents Projets (en cours d'update)</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/placeholder.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Projet 1</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium officia nam
                                    minus sed impedit.</p>
                                <a href="#" class="link-custom">En savoir plus...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/placeholder.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Projet 2</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium officia nam
                                    minus sed impedit.</p>
                                <a href="#" class="link-custom">En savoir plus...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/placeholder.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Projet 3</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium officia nam
                                    minus sed impedit.</p>
                                <a href="#" class="link-custom">En savoir plus...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/placeholder.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Projet 4</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium officia nam
                                    minus sed impedit.</p>
                                <a href="#" class="link-custom">En savoir plus...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/placeholder.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Projet 5</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium officia nam
                                    minus sed impedit.</p>
                                <a href="#" class="link-custom">En savoir plus...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/placeholder.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Projet 6</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium officia nam
                                    minus sed impedit.</p>
                                <a href="#" class="link-custom">En savoir plus...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // WORK -->

        <!-- ABOUT -->
        <section id="about" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">QUI SUIS-JE ?</h6>
                        <h1>Mon parcours</h1>
                    </div>
                </div>

                <div class="row gy-5">
                    <div class="col-lg-6">
                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Diplômes</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Concepteur développeur d'application Fullstack</h4>
                                    <p class="text-brand mb-2">Simplon (2022-2023)</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                        veritatis.</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Certificat Multimédia caméraman Webmestre</h4>
                                    <p class="text-brand mb-2">Cadastre (2001 - 2002)</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                        veritatis.</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Bac Pro Mavelec</h4>
                                    <p class="text-brand mb-2">Lycée Cisson (2000)</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                        veritatis.</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>CAP Connectique et controle</h4>
                                    <p class="text-brand mb-2">Lycée Cisson (1998)</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet </p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>BEP électronique</h4>
                                    <p class="text-brand mb-2">Lycée Cisson (1998)</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur </p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Expérience</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>CNRS - Centre national de la recherche scientifique</h4>
                                    <p class="text-brand mb-2">2023</p>
                                    <p class="mb-0">Stage de formation Conception d'un projet entier en symfony,
                                        APIPlatform, VueJS et vuetify</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>IKEA</h4>
                                    <p class="text-brand mb-2">Toulon / Grenoble (2006 - 2022)</p>
                                    <p class="mb-0">Vendeur en reconditionnement, gestion administrative, création
                                        d'intranet, création logiciel en national </p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>SIVAEL - blanchisserie inter-hospitalière</h4>
                                    <p class="text-brand mb-2">La Garde (2002 - 2006)</p>
                                    <p class="mb-0">Employé de machinerie (pliage, repassage), employé de tri de linge
                                        d'hôpitaux, livraison dans les hôpitaux de la région PACA
                                    </p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Casino</h4>
                                    <p class="text-brand mb-2">Carqueiranne (2001)</p>
                                    <p class="mb-0">Logisticien</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>EDF - GDF</h4>
                                    <p class="text-brand mb-2">La Garde (1998)</p>
                                    <p class="mb-0">Secrétariat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // ABOUT  -->

        <!-- TECHNO -->
        <section id="techno" class="full-height px-lg-5">
            <div class="container">
                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">TECHNO</h6>
                        <h1>Les différnets langages et techno que j'utilise</h1>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-md-2" data-aos="fade-up">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-html5"></i>
                            </div>
                            <h5 class="mt-4 mb-2">HTML</h5>
                            <p>Création de pages web</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-css3-alt"></i>
                            </div>
                            <h5 class="mt-4 mb-2">CSS</h5>
                            <p>Adepte du Nesting</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-js"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Javascript</h5>
                            <p>Création de sites web</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="900">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-bootstrap"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Boostrap</h5>
                            <p>Ou Tailwind ou Bulma</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="1200">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-react"></i>
                            </div>
                            <h5 class="mt-4 mb-2">React Native</h5>
                            <p>Notions générales</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="1500">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-vuejs"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Vue.js</h5>
                            <p>Avec ou sans Vuetify</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="0">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-wordpress"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Wordpress</h5>
                            <p>Divi ou elementor</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-php"></i>
                            </div>
                            <h5 class="mt-4 mb-2">PHP</h5>
                            <p>Architecture MVC</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <h5 class="mt-4 mb-2">MySQL</h5>
                            <p>avec PHPMyAdmin</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="900">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-symfony"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Symfony</h5>
                            <p>avec ou sans APIPlatform</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="1200">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-figma"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Figma</h5>
                            <p>ou Canvas ou Penpot</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up" data-aos-delay="1500">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-solid fa-paintbrush"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Photoshop</h5>
                            <p>ou Clip Studio Paint</p>
                        </div>
                    </div>

                    <div class="col-md-2" data-aos="fade-up">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <i class="fa-brands fa-microsoft"></i>
                            </div>
                            <h5 class="mt-4 mb-2">Office</h5>
                            <p>Word, excel, Access, powerpoint...</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- // TECHNO -->

        <!-- ARTICLE -->
        <section id="article" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">BÉNÉVOLAT</h6>
                        <h1>Rédacteur en chef - Testeur</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/test.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Les tests</h4>
                                <p>Je m'occupe de rédiger des tests de tous supports : jeux vidéo, médiathèque et
                                    matériel high tech</p>
                                <a href="https://www.spiritgamer.fr/nos-tests-de-jeux-videos/" class="link-custom">Lien
                                    du site</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./Assets/images/article.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Les articles de presse</h4>
                                <p>Je rédige des communiqués de presse et exploite toutes les news de l'étranger (site
                                    anglophone, japonais, Italien et Allemand)</p>

                                <a href="https://www.spiritgamer.fr/toutes-les-actualites-gaming-et-culture-geek/" class="link-custom">Lien du site</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- // ARTICLE  -->

        <!-- CONTACT -->
        <section id="contact" class="full-height px-lg-5">
            <div class="container">

                <div class="row justify-content-center text-center ">
                    <div class="col-lg-8 pb-4" data-aos="fade-up">
                        <h6 class="text-brand">POUR TOUTE DEMANDE</h6>
                        <h1>Me contacter</h1>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">

                        <?php
                        //display error message
                        if (isset($info)) { ?>
                            <p class='request_message' style="color:red"><?= $info ?></p>
                        <?php
                        }
                        ?>
                        <?php
                        //display success message
                        if (isset($_SESSION['success_message'])) { ?>
                            <p class='request_message' style="color:green"><?= $_SESSION['success_message'] ?></p>
                        <?php
                        }
                        ?>

                        <form action="" method="POST" class="row g-lg-3 gy-3">
                            <div class="form-group col-md-6">
                                <input name="nom" type="text" class="form-control" placeholder="Entrez votre Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="email" type="email" class="form-control" placeholder="Entrez votre Email">
                            </div>
                            <div class="form-group col-12">
                                <input name="sujet" type="text" class="form-control" placeholder="Entrez votre sujet">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" rows="9" class="form-control" placeholder="Entrez votre message"></textarea>
                            </div>
                            <div class="form-group col-12 d-grid">
                                <button type="submit" name="send" class="btn btn-brand">Contactez-moi</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- // CONTACT  -->

        <!-- FOOTER -->
        <footer class="py-5 px-lg-5">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Copyright 2024 Vianney Giovannelli</p>
                    </div>
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/vianney.giovannelli"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://twitter.com/yakudark"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://www.instagram.com/yakudark/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/feed/"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://github.com/Yakudark"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- // FOOTER -->
    </div>
    <!-- // CONTENT WRAPPER -->




    <script src="https://kit.fontawesome.com/46b45f68e6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./Assets/JS/aos.js"></script>
    <script src="./Assets/JS/app.js"></script>
</body>

</html>