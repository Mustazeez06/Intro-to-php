<?php
    class Car{
        public $color;
        public $model;

        public function __construct($color, $model){
          $this->color = $color;
          $this->model = $model;

        }

        public function messsage(){
            echo 'My car is a ' . $this->color . ' ' . $this->model;
        }
    }
    $mycar = new Car('black', 'volvo');
    echo $mycar -> messsage();

?>