<?php

// // What is class and instance
// class Person {
//     public $name;
//     public $surname;
//     private $age;

//     public function __construct($name, $surname)
//     {
//         $this.$name = $name;
//         $this.$surname = $surname;
//     }

//     function hello() 
//     {
//         return "hello i am".$this->$name ." ".$this->$surname;
//     }


//     public function setAge($age)
//     {
//         if($age > 0){
//             $this->$age = $age;
//         } else {
//             throw new Exception("Invalid age");
//         }
      
//     }

//     public function getAge()
//     {
//         return $this->$age;
//     }
// }

// $person = new Person("gena", "genashvili");
// // $person->$name = "zura"; // in javscript istead of this -> we use .
// // $person->$surname = "atabagi";
// // we can not use age because its private, we can coonect with age inside of class and not outside of class.
//  echo $person->hello();

//  $person2 = new Person("archo", "sharabdeli");
// // $person2->$name = "giorgi"; // in javscript istead of this -> we use .
// // $person2->$surname = "dvali";
// // we can not use age because its private, we can coonect with age inside of class and not outside of class.
//  echo $person2->hello();

//  $person->setAge(28);
//  $person->getAge().'<br>';

// Create Person class in Person.php



// Create instance of Person

// Using setter and getter