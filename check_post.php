<?php
echo "GOOD JOB <br>";
$_POST["phone"] = md5($_POST["phone"]);
foreach ($_POST as $key => $value) {
    echo "KEY: $key and VALUE: $value <br>";
}

$_POST["phone"] = md5($_POST["phone"]);

echo "<br>". $_POST["username"] . ",спасибо за отправку!";

$text = "Username: " . $_POST["username"] . "\n" . "UserSurname: " . $_POST["usersurname"] . "\n" ."E-mail: " . $_POST["email"] . "\n" ."Phone: " . $_POST["phone"] . "\n";

$filename = "text.txt";
$file = fopen($filename, "w");

fwrite($file, "<pre>$text</pre>");
fclose($file);

$file = fopen($filename, "r");
$filer = fread($file, filesize($filename));
echo $filer;

$message = "Спасибо" . $_POST["username"] . " " . $_POST["usersurname"] . "за отправку резюме. После рассмотрения мы с вами свяжемся \n Команда ArtRegion #U+1F609";
$to = $_POST["email"];
$from = "kakimarra@mail.ru";

$subject = "Спасибо за отправку!";

$subject = "=?utf-8?B?" .base64_encode($subject) . "?=";

$headers = "From: $from\r\nReplay-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);

?>
<script>
</script>
