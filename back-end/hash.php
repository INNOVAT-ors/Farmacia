<?php
echo "PASSWORD CIFRADA";
echo "<br>";
$hash=password_hash("imposible", PASSWORD_DEFAULT);
echo "HASH: " . $hash;
?>