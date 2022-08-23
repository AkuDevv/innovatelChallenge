<?php
require_once "database.php";
if (isset($_POST["submit"])) {

    $image_file = $_FILES["pfp"];
    $files_file = $_FILES["files"];

    $user_dir = $_POST['nom'] . $_POST['prenom'] . uniqid();
    $uploads = "uploads/images/" . $user_dir;
    $uploads_files = "uploads/files/" . $user_dir;
    mkdir($uploads, 0777, true);
    mkdir($uploads_files, 0777, true);

    if (!isset($image_file)) {
        die('No file uploaded.');
    }
    if (!isset($files_file)) {
        die('No file uploaded.');
    }

    move_uploaded_file(
        $image_file["tmp_name"],
        $uploads . "/" . $image_file['name']
    );

    move_uploaded_file(
        $files_file["tmp_name"],
        $uploads_files . "/" . $files_file['name']
    );

    $pfp = $uploads . "/" . $image_file['name'];
    $files = $uploads_files . "/" . $files_file['name'];

    $insert = $conn->prepare("INSERT INTO candidats (nom, prenom, datenaissance, telephone, email, pays, ville, niveau, specialite, job, diplome, certifications, participation, prix, langues, technologies, canal, association, participer, motivations, titre, objectifs, abr, domaine, avantages, impactsocial, avancement, deploye, projet, impact, solution, resultats, attends, pfp, files) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $insert->execute(array(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['datenaissance'],
        $_POST['telephone'],
        $_POST['email'],
        $_POST['pays'],
        $_POST['ville'],
        $_POST['niveau'],
        $_POST['specialite'],
        $_POST['job'],
        $_POST['diplome'],
        $_POST['certifications'],
        $_POST['participation'],
        $_POST['prix'],
        $_POST['langues'],
        $_POST['technologies'],
        $_POST['canal'],
        $_POST['association'],
        $_POST['participer'],
        $_POST['motivations'],
        $_POST['titre'],
        $_POST['objectifs'],
        $_POST['abrege'],
        $_POST['domaine'],
        $_POST['avantages'],
        $_POST['impactsocial'],
        $_POST['avancement'],
        $_POST['deploye'],
        $_POST['projet'],
        $_POST['impact'],
        $_POST['solution'],
        $_POST['resultats'],
        $_POST['attends'],
        $pfp,
        $files
    ));
    echo '<h1>Votre insription a été enregistrée avec succès!</h1>';
}