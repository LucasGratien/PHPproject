<?php
include ("submit.php");
session_start();
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($errors)) {
    }

    if (empty($_POST["nom"])) {
        $errors[] = "Le nom est requis.";
    }

    if (empty($_POST["email"])) {
        $errors[] = "L'email est requis.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Le format de l'email est invalide.";
    }

    $raisons_valides = array("service_comptable", "service_technique", "service-client");
    if (in_array($raison, $raisons_valides)) {
        $errors[] = "Veuillez sélectionner une raison de contact valide.";
    }

    if (strlen($_POST["message"]) < 5) {
        $errors[] = "Le message doit contenir au moins 5 caractères.";
    }

    //if (!empty($errors)) {
    //foreach ($errors as $error) {
    //  echo "<p style='color: red;'>$error</p>";
    //}

    //} 
    else {
        echo "<p style='color: green;'>Formulaire soumis avec succès !</p>";
    }

}


erreur($errors);


?>

<?php


$title = 'Contact'; ?>
<div class="contact">
    <div id="container">
        <h1>Contactez-nous</h1>
        <form action="index.php?page=Contact" method="POST">
            <div class="form-group">
                <label for="nom">Nom :</label>

                <input type="text" id="nom" name="nom" value="<?php echo $_SESSION["nom"] ?>">
                <?php foreach ($errors as $error) {
                    echo "<p style='color: red;'>$error</p>";
                }
                ; ?>

            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$"
                    value="<?php echo $_SESSION["email"] ?>">
                <?php foreach ($errors as $error) {
                    echo "<p style='color: red;'>$error</p>";
                }
                ; ?>
            </div>
            <div class="form-group">
                <label>Raison du contact</label>
                <div class="radio-group">
                    <label><input type="radio" name="contact_reason" value="service_comptable" required> Service
                        Comptable</label>
                    <label><input type="radio" name="contact_reason" value="service_technique"> Service
                        Technique</label>
                    <label><input type="radio" name="contact_reason" value="service_client"> Service Client</label>
                    <label><input type="radio" name="contact_reason" value="autre"> Autre</label>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4"><?php echo $_SESSION["message"] ?></textarea>
                <?php foreach ($errors as $error) {
                    echo "<p style='color: red;'>$error</p>";
                }
                ; ?>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</div>