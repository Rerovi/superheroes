<?php


class avenger extends superheroes {
    public function __construct($name, $gender, $oneliner)
    {
        $team = "Avengers";
        parent::__construct($name, $gender, $team, $oneliner);
    }
}