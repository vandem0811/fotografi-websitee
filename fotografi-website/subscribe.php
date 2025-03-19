<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    file_put_contents("subscribers.txt", $email . PHP_EOL, FILE_APPEND);
    echo "Thank you for subscribing!";
}
?>
