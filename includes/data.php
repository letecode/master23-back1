<?php

    session_start();

    define('DAY', 'Monday');

    $name = "Nathan";
    $NAME = "Nathan";
    $age = 18;

    $users = ['Nathan', 'Maria', 'Plamedi'];
    $users = [
        [
            "name" => "Nathan",
            "prenom" => "Miche",
            "ville" => "Kinshasa",
            "age" => 26
        ],
        [
            "name" => "Bolikango",
            "prenom" => "Maria",
            "ville" => "Kinshasa",
            "age" => 24
        ],
        [
            "name" => "Makengo",
            "prenom" => "Plamedi",
            "ville" => "Kinshasa",
            "age" => 25
        ],
    ];

    function greeting($name, $message = "Hello") {
        return "$message $name";
    }

    // if($age > 18 and $age < 40) {
    //     echo "Je suis majeur";
    // } elseif($age == 18) {
    //     echo "Nouveau majeur";
    // } else {
    //     echo "Je suis mineur";
    // }

    // for($i = 1; $i <= 20;$i++) {
    //     echo "<p>" . $i .'</p>';
    // }


    // for($i = 0; $i < count($users);$i++) {
    //     echo "<p>" . $users[$i]. '</p>';
    // }


    // session
    $user = "jean claude";


    $_SESSION['name'] = $user;
    $_SESSION['email'] = "email@gmail.com";


    $email = $_SESSION['email'];

?>