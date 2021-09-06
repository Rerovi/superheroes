<?php


class superheroes {
 public $name;
 public $gender;
 public $team;
 public $oneliner;

    public function __construct($name, $gender, $team, $oneliner)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->team = $team;
        $this->oneliner = $oneliner;
    }

    public function __toString() {
        return json_encode($this);
    }

    public function gender() {
        echo '<h2> I am a '.$this->gender.'</h2>';
    }
}