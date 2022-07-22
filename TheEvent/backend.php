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

  $image_file = $_FILES["pfp"];
  $files_file = $_FILES["files"];

  $user_dir = $_POST['nom'] . $_POST['prenom'] . uniqid();
  $uploads = "uploads/images/" . $user_dir;
  $uploads_files = "uploads/files/" . $user_dir;
  mkdir($uploads, 0777, true);
  mkdir($uploads_files, 0777, true);
  // Image not defined, let's exit
  if (!isset($image_file)) {
    die('No file uploaded.');
  }
  if (!isset($files_file)) {
    die('No file uploaded.');
  }

  // Move the temp image file to the images/ directory
  move_uploaded_file(
    // Temp image location
    $image_file["tmp_name"],

    // New image location, _DIR_ is the location of the current PHP file
    $uploads . "/" . $image_file['name']
  );
  move_uploaded_file(
    // Temp image location
    $files_file["tmp_name"],

    // New image location, _DIR_ is the location of the current PHP file
    $uploads_files . "/" . $files_file['name']
  );

  // info personnelles
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $datenaissance = $_POST['datenaissance'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $pays = $_POST['pays'];
  $ville = $_POST['ville'];
  $niveau = $_POST['niveau'];
  $specialite = $_POST['specialite'];
  $job = $_POST['job'];
  $diplome = $_POST['diplome'];
  $certifications = $_POST['certifications'];
  $participation = $_POST['participation'];
  $prix = $_POST['prix'];
  $langues = $_POST['langues'];
  $technologies = $_POST['technologies'];
  $canal = $_POST['canal'];
  $association = $_POST['association'];
  $participer = $_POST['participer'];
  $motivations = $_POST['motivations'];

  // Info sur le projet
  $titre = $_POST['titre'];
  $objectifs = $_POST['objectifs'];
  $abrege = $_POST['abrege'];
  $domaine = $_POST['domaine'];
  $avantage = $_POST['avantages'];
  $impactsocial = $_POST['impactsocial'];
  $avancement = $_POST['avancement'];
  $deploye = $_POST['deploye'];
  $projet = $_POST['projet'];
  $impact = $_POST['impact'];
  $solution = $_POST['solution'];
  $resultats = $_POST['resultats'];
  $attends = $_POST['attends'];
  $pfp = $uploads . "/" . $image_file['name'];
  $files = $uploads . "/" . $files_file['name'];

  $sql = "INSERT INTO candidats (nom, prenom, datenaissance, telephone, email, pays, ville, niveau, specialite, job, diplome, certifications, participation, prix, langues, technologies, canal, association, participer, motivations, titre, objectifs, abr, domaine, impactsocial, avantage,avancement, projet, impact, solution, resultats, attends, pfp, files) 
       VALUES ($nom, $prenom, $datenaissance, $telephone,$email, $pays, $ville, $niveau, $specialite, $job,$diplome, $certifications, $participation, $prix, $langues,$technologies,$canal,$association,$participer,$motivations,$titre,$objectifs, $abrege, $domaine, $avantage, $impactsocial,$avancement,$deploye,$projet,$impact,$solution,$resultats,$attends,$pfp,$files)";
  echo $sql . "<br>";
  if (mysqli_query($connection, $sql)) {
    echo "Votre insription a été enregistée avec succès!";
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($connection);
  }
  mysqli_close($connection);
}