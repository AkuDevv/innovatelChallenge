<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'event';
$form_id = $_GET['form_id'];

$connection = mysqli_connect($host, $username, $password, $dbname);
if ($connection == false) {
	die('Erreur de connexion!');
} else {
	$select = "SELECT * from formules where id_formule=$form_id";
	$result = mysqli_query($connection, $select);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			$nom_formule = $row[1];
			$vis_avant = $row[2];
			$vis_pendant = $row[3];
			$vis_apres = $row[4];
			$color = $row[5];
		}
	} else {
		echo "<p>Erreur!</p>";
	}
}
?>
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
					<li><a href="index.html" class="active">Accueil</a></li>
					<li><a href="#prix">Informations</a></li>
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
							<h2 class="animate__animated animate__fadeInDown">FORMULE SPONSORING :<span style="color: <?php echo $color; ?>"> <?php echo $nom_formule; ?></span></h2>
							<p class="animate__animated animate__fadeInUp">Vous trouvez ici les informations concernant cette formule</p>
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

		<!-- ======= About Section ======= -->
		<section id="features" class="features">
			<div class="container">

				<div class="section-title">
					<h2>A Propos</h2>
					<p>Informations sur Votre Visibilité</p>
				</div>

				<div class="row">
					<div class="col-lg-3">
						<ul class="nav nav-tabs flex-column">
							<li class="nav-item">
								<a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Visibilité avant l’événement</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-2">Visibilité pendant l’événement</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-3">Visibilité après l’événement</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 mt-4 mt-lg-0">
						<div class="tab-content">

							<div class="tab-pane active show" id="tab-1">
								<div class="row">
									<div class="col-lg-8 details order-2 order-lg-1">
										<h3>Visibilité avant l’événement</h3>
										<p class="fst-italic">
										<ul class="objectifs d-flex flex-column align-items-start">
											<?php
											echo str_replace("-", "<li class='mb-2'><i class='bi bi-arrow-right-square-fill me-3'></i>", $vis_avant);
											?>
										</ul>
										</p>
									</div>
									<div class="col-lg-4 text-center order-1 order-lg-2">
										<img src="assets/img/objectifs.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>

							<div class="tab-pane" id="tab-2">
								<div class="row">
									<div class="col-lg-8 details order-2 order-lg-1">
										<h3>Visibilité pendant l’événement</h3>
										<p class="fst-italic">
										<ul class="objectifs d-flex flex-column align-items-start">
											<?php
											echo str_replace("-", "<li class='mb-2'><i class='bi bi-arrow-right-square-fill me-3'></i>", $vis_pendant);
											?>
										</ul>
										</p>
									</div>
									<div class="col-lg-4 text-center order-1 order-lg-2">
										<img src="assets/img/objectifs.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>

							<div class="tab-pane" id="tab-3">
								<div class="row">
									<div class="col-lg-8 details order-2 order-lg-1">
										<h3>Visibilité après l’événement</h3>
										<p class="fst-italic">
										<ul class="objectifs d-flex flex-column align-items-start">
											<?php
											echo str_replace("-", "<li class='mb-2'><i class='bi bi-arrow-right-square-fill me-3'></i>", $vis_apres);
											?>
										</ul>
										</p>
									</div>
									<div class="col-lg-4 text-center order-1 order-lg-2">
										<img src="assets/img/objectifs.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

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