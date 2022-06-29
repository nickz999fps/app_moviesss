<?php

namespace APP\Controller;

require "../../vendor/autoload.php";

use APP\Model\Director;
use APP\Model\Movie;
use APP\Model\MovieGender;
use APP\Model\Producer;

$director_one = new Director(name: "George Lucas", phone:"9999-9999");
$producer_one = new Producer(name: "Lucasfilm", phone: "9999-999");
$movie_one = new Movie(
    title: "Star Wars",
    duration: 150,
    movieGender: MovieGender::ADVENTURE,
    yearOfRelease: 1987,
    director: $director_one,
    producer: $producer_one
);


echo "<pre>";
var_dump($movie_one);
echo "</pre>";



