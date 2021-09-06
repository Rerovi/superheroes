<?

require 'superheroes.php';
require 'avenger.php';

$spiderman =  new Superheroes('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
$thor = new Avenger('Thor', 'Male', 'For Asgard!');
$thor->gender();

//print_r('<pre>' . $thor . '</pre>');
////print_r($spiderman);
//print_r('<pre>'. $spiderman . '</pre>');

$spiderman->gender();