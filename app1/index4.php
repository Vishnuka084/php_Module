
<?php

    class Student{
        public $name;
        protected $address;
        private $mark;

        public function __construct($name , $address , $mark){
              $this->name = $name;
              $this->address = $address;
              $this->mark = $mark;

        }

        public function printName(){
            echo $this->name ;

        }

    }

    $s1 = new Student("Nimal", "Colombo", 80);
    //echo $s1 -> name;
    $s1 -> printName();



?>