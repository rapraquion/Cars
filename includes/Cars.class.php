<?php

class Cars {
    protected $color;
    protected $model;
    protected $brand;

    protected function __construct() {
        self::Car();
    }

    public function Car(){
        $this->color = "red";
        $this->model = "Wigo";
        $this->brand = "Toyota";
    }
}