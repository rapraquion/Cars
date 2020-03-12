<?php

class MentorsCar extends Cars {

    protected $color;
    protected $model;
    protected $brand;

    public function __construct(){
        parent::__construct();
    }

    public function newMentorCar($color, $model, $brand) {
        $this->color = $color;
        $this->model = $model;
        $this->brand = $brand;
    }

    public function mentorCar() {
        if(!empty($this->color && $this->model && $this->brand)) {
            echo "Mentor's car is $this->brand with a $this->model as a model and $this->color in color";
            echo "<br />";
        } else {
            echo "Type in the properties";
        }
    }

}