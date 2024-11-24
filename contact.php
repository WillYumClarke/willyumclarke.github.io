<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    $file = 'submissions.txt';

    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        echo "Thank you! Your message has been saved.";
    } else {
        echo "Sorry, there was an error saving your message.";
    }
}
?>
