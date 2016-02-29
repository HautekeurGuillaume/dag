<?php

DEFINE(SERVER, 'localhost');
DEFINE(LOGIN, 'root');
DEFINE(PASSWORD, 'fsociety');
DEFINE(BASE, 'exoajax');

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, BASE) or die('Could not connect to the database, please check your info');

$info = mysqli_query($connect, "SELECT * FROM hero");

function hero() {
    While ($data = mysqli_fetch_assoc($info)) {
        echo utf8_encode($data['nom']) . " " . utf8_encode($data['prenom']) . utf8_encode($data['age']) . " " . utf8_encode($data['profession']) . " " . utf8_encode($data['email']) . utf8_encode($data['codec']) . " " . "</br>";
    }
}
