<!doctype html>
<html lang="en">

<head>
	<title>Candidats</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Candidats Challenge</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="table-wrap">
						<table class="table">
							<thead class="thead-primary">
								<tr>
									<th>id</th>
									<th>nom</th>
									<th>prenom</th>
									<th>date naissance</th>
									<th>telephone</th>
									<th>email</th>
									<th>pays</th>
									<th>ville</th>
									<th>niveau</th>
									<th>specialite</th>
									<th>job</th>
									<th>diplome</th>
									<th>certifications </th>
									<th>participation </th>
									<th>prix </th>
									<th>langues </th>
									<th>technologies </th>
									<th>canal </th>
									<th>association </th>
									<th>participer </th>
									<th>motivations </th>
									<th>titre </th>
									<th>objectifs </th>
									<th>abr </th>
									<th>domaine </th>
									<th>avantages </th>
									<th>impact social </th>
									<th>avancement </th>
									<th>deploye </th>
									<th>projet </th>
									<th>impact </th>
									<th>solution </th>
									<th>resultats </th>
									<th>attends </th>
									<th>image </th>
									<th>fichiers</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$host = 'localhost';
								$username = 'root';
								$password = '';
								$dbname = 'event';

								$connection = mysqli_connect($host, $username, $password, $dbname);
								if ($connection == false) {
									die('Erreur de connection!');
								} else {
									$select = "SELECT * from candidats";
									$result = mysqli_query($connection, $select);
									if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_array($result)) {
											echo
											"
											<tr>
												<th scope='row'>".($row[0]+1)."</th>
												<td>".$row[1]."</td>
												<td>".$row[2]."</td>
												<td>".$row[3]."</td>
												<td>".$row[4]."</td>
												<td>".$row[5]."</td>
												<td>".$row[6]."</td>
												<td>".$row[7]."</td>
												<td>".$row[8]."</td>
												<td>".$row[9]."</td>
												<td>".$row[10]."</td>
												<td>".$row[11]."</td>
												<td>".$row[12]."</td>
												<td>".$row[13]."</td>
												<td>".$row[14]."</td>
												<td>".$row[15]."</td>
												<td>".$row[16]."</td>
												<td>".$row[17]."</td>
												<td>".$row[18]."</td>
												<td>".$row[19]."</td>
												<td>".$row[20]."</td>
												<td>".$row[21]."</td>
												<td>".$row[22]."</td>
												<td>".$row[23]."</td>
												<td>".$row[24]."</td>
												<td>".$row[25]."</td>
												<td>".$row[26]."</td>
												<td>".$row[27]."</td>
												<td>".$row[28]."</td>
												<td>".$row[29]."</td>
												<td>".$row[30]."</td>
												<td>".$row[31]."</td>
												<td>".$row[32]."</td>
												<td>".$row[33]."</td>
												<td><a href='../../" . $row[34] . "'>photo</a></td>
												<td><a href='../../" . $row[35] . "'>file</a></td>
											</tr>
											";
										}
									} else {
										echo "Pas de données!";
									}
								}
								mysqli_close($connection);
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>