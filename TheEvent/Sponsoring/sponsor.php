<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sponsoring - Innovatel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/Inno-logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Sailor - v4.8.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="assets/img/Inno-logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="../index.html" class="active">Accueil</a></li>
                    <li><a href="#about" class="getstarted">Devenir Sponsor</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <button data-bs-target='#heroCarousel' data-bs-slide-to='2'>
                Objectifs
            </button>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/sponsorship.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">DEVENIR SPONSOR</h2>
                            <p class="animate__animated animate__fadeInUp">Veuillez remplire le formulaire çi-dessous</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                Devenir Sponsor
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <section id="about" class="about">
            <div class="container pt-5">
                <form action="#" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="section-title">
                            <h2>Participer</h2>
                            <p>Devenir Sponsor</p>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-lg-6 col-md-12">
                                <label for="nom" class="form-label">Nom complet :</label>
                                <input type="text" name="nom" id="nom" class="form-control" required>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-12">
                                <label for="telephone" class="form-label">Numéro de téléphone :</label>
                                <input type="tel" name="telephone" id="telephone" class="form-control" required>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-12">
                                <label for="email" class="form-label">Adresse e-mail :</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-12">
                                <label for="entreprise" class="form-label">Entreprise :</label>
                                <input type="text" name="entreprise" id="entreprise" class="form-control" required>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-12">
                                <label for='formule' class='form-label'>Type de Sponsor :</label><br>
                                <input type='radio' name='formule' value='1' id='formule' required> <label for='virement' class='form-label'>Sponsor Officiel</label><br>
                                <input type='radio' name='formule' value='2' id='formule' required> <label for='especes' class='form-label'>Platinum</label><br>
                                <input type='radio' name='formule' value='3' id='formule' required> <label for='cheques' class='form-label'>Gold</label><br>
                                <input type='radio' name='formule' value='4' id='formule' required> <label for='cheques' class='form-label'>Silver</label><br>
                                <input type='radio' name='formule' value='5' id='formule' required> <label for='cheques' class='form-label'>Partenaire (Institutionel - Média - Presse - Techonologique)</label>
                            </div>

                            <div class="mb-3 col-lg-12 col-md-12">
                                <label for="messagee" class="form-label">Message :</label>
                                <textarea name="messagee" id="messagee" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <div class=" mb-3 d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-success">Valider</button>
                    </div>
                </form>
            </div>
            <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'event';

            $connection = mysqli_connect($host, $username, $password, $dbname);
            if (!$connection) {
                die('Could not Connect MySql Server!');
            }
            if (isset($_POST['submit'])) {


                $nom = $_POST['nom'];
                $email = $_POST['email'];
                $tel = $_POST['telephone'];
                $entreprise = $_POST['entreprise'];
                $messagee = $_POST['messagee'];
                $form_id = $_POST['formule'];
                $nom_formule = "";
                
                if($form_id == 1) {$nom_formule = "Partenaire/Sponsor Officiel";}
                else if($form_id == 2) {$nom_formule = "Platinum";}
                else if($form_id == 3) {$nom_formule = "Gold";}
                else if($form_id == 4) {$nom_formule = "Silver";}
                else if($form_id == 5) {$nom_formule = "Partenaire (Institutionel - Média - Presse - Techonologique)";}

                $sql = "INSERT INTO candidat_sponsor (nom_complet, tel,email, entreprise, messagee, id_formule, nom_formule) 
                    VALUES ('$nom', '$tel', '$email', '$entreprise','$messagee', '$form_id','$nom_formule')";
                if (mysqli_query($connection, $sql)) {
                    echo "Votre insription a été enregistée avec succès!";
                } else {
                    echo "Error: " . $sql . ":-" . mysqli_error($connection);
                }
                mysqli_close($connection);
            }

            ?>
        </section><!-- End About Section -->

        <!-- ======= Footer ======= -->
        <section id="contact" class="section-bg">

            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contacter Nous</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Adresse</h3>
                            <address>42, Bd Zerktouni, 2nd floor, Office N°6, Casablanca<br></address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Numéro du téléphone</h3>
                            <p>+212 (5) 22 22 52 63</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:contact@innovatel.ma">contact@innovatel.ma</a></p>
                        </div>
                    </div>

                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row  d-flex justify-content-center">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="assets/img/Inno-logo.png" alt="Innovatel">
                        <p>Founded by a specialist in embedded electronics and low current systems. With 27 years of
                            experience in several multinational companies such as LAFARGE CIMENTS MAROC , or JACOBS
                            ENGINEERING SA where he held the position of Senior Specialist in Video-Data-Security. He
                            has developed a very sharp know-how in design, engineering and technical studies in fields
                            such as telecommunication, electronic security, intelligent buildings, digital signage &
                            vehicle flow management.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contacter nous</h4>
                        <p>
                            42, Bd Zerktouni, 2nd floor,
                            <br>Office N°6, Casablanca<br>
                            <strong>Phone:</strong> +212 (5) 22 22 52 63<br>
                            <strong>Email:</strong> contact@innovatel.ma<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 social-links">

                        <h4>Nous suivre</h4>
                        <a href="https://www.facebook.com/innovatelengineering" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/innovatel_engineering/" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/innovatel-engineering/" class="linkedin"><i class="bi bi-linkedin"></i></a>

                    </div>




                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>