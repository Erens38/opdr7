<?php
//functie: startpagina

require_once "user.php"

// maak object user aan
$user = new user();

$user->registerUser("jantje", "geheim ", "admin");

var_dump($user);

?> 



