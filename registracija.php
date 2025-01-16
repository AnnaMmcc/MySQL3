<?php

if(!isset($_POST['email']) || empty($_POST['email']))
{
    die ("Niste uneli email");
}

if(!isset($_POST['sifra']) || empty($_POST['sifra']))
{
    die ("Niste uneli lozinku");
}

$email = $_POST['email'];
$lozinka = $_POST['sifra'];

require_once "baza.php";

$baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$lozinka')");