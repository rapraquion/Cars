<?php

class Cars {
    public $color;
    public $model;
    public $brand;

    public function __construct($color, $model, $brand) {
        $this->color = $color;
        $this->model = $model;
        $this->brand = $brand;
    }
}

class MentorsCar extends Cars {

    public function Car() {
        if(!empty($this->color && $this->model && $this->brand)) {
            echo "Mentor's car is $this->brand with a $this->model as a model and $this->color in color";
            echo "<br />";
        } else {
            echo "Type in the properties";
        }
    }

}

class StudentCar extends Cars {
    
    public function Car() {
        if(!empty($this->color && $this->model && $this->brand)) {
            echo "Student's car is $this->brand with a $this->model as a model and $this->color in color";
            echo "<br />";
        } else {
            echo "Type in the properties";
        }
    }

}