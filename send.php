<?php
// Ustaw swój adres email tutaj:
$to = "";

// Pobierz dane z formularza
$contactChoice = $_POST['contactChoice'] ?? '';
$phoneNumber = $_POST['phoneNumber'] ?? '';
$emailAddress = $_POST['emailAddress'] ?? '';
$message = $_POST['message'] ?? '';

// Wybierz kontakt
$contactInfo = $contactChoice === 'phone' ? "Telefon: $phoneNumber" : "Email: $emailAddress";

// Temat i treść wiadomości
$subject = "Nowa wiadomość z formularza kontaktowego";
$body = "Dane kontaktowe:\n$contactInfo\n\nTreść wiadomości:\n$message";

// Nagłówki
$headers = "From: formularz@twojastrona.pl";

// Wyślij wiadomość
if (mail($to, $subject, $body, $headers)) {
    echo "Dziękujemy! Wiadomość została wysłana.";
} else {
    echo "Ups! Coś poszło nie tak. Spróbuj ponownie.";
}
?>
