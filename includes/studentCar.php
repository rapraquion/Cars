<?php

class StudentCar extends Cars {

    protected $color;
    protected $model;
    protected $brand;

    public function __construct(){
        parent::__construct();
    }

    public function newStudentCar($color, $model, $brand) {
        $this->color = $color;
        $this->model = $model;
        $this->brand = $brand;
    }

    public function studentCar() {
        if(!empty($this->color && $this->model && $this->brand)) {
            echo "Student's car is $this->brand with a this $this->model as a model and $this->color in color";
            echo "<br />";
        } else {
            echo "Type in the properties";
        }
    }

}