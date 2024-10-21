<?php
// Controleer of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de gegevens van het formulier op en sanitiseer ze
    $voornaam = htmlspecialchars(trim($_POST['fname']));
    $achternaam = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['e-mail']));
    $telefoonnummer = htmlspecialchars(trim($_POST['phone-number']));

    // Valideer de invoer
    $errors = [];

    if (empty($voornaam)) {
        $errors[] = "Voornaam is vereist.";
    }

    if (empty($achternaam)) {
        $errors[] = "Achternaam is vereist.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Een geldig e-mailadres is vereist.";
    }

    if (empty($telefoonnummer)) {
        $errors[] = "Telefoonnummer is vereist.";
    }

    // Controleer of er fouten zijn
    if (empty($errors)) {
        // Voorbereiden van de e-mail
        $to = "amber.schalker@hva.nl";
        $subject = "Aanmelding Geveltuin Project";
        $message = "Voornaam: $voornaam\n";
        $message .= "Achternaam: $achternaam\n";
        $message .= "E-mailadres: $email\n";
        $message .= "Telefoonnummer: $telefoonnummer\n";
        $headers = "From: $email\r\n"; // Stuur een e-mail vanuit het opgegeven e-mailadres

        // Verzend de e-mail
        if (mail($to, $subject, $message, $headers)) {
            echo "<h2>Bedankt voor uw aanmelding!</h2>";
            echo "<p>Uw gegevens zijn succesvol verzonden.</p>";
        } else {
            echo "<h2>Er is een fout opgetreden bij het verzenden van de e-mail.</h2>";
        }
    } else {
        // Geef de fouten weer
        echo "<h2>Er zijn fouten opgetreden:</h2>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
} else {
    // Formulier is niet verzonden
    echo "<h2>Formulier is niet verzonden.</h2>";
}
?>
