<?

require 'superheroes.php';

$spiderman =  new Superheroes('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');

//print_r($spiderman);
print_r('<pre>'. $spiderman . '</pre>');

$spiderman->gender();