<?php
// Kelas utama (superclass)
class Animal {
    protected $name;
    protected $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound() {
        echo $this->name . " says " . $this->sound . "\n";
    }
}

// Kelas turunan (subclass) dari Animal
class Dog extends Animal {
    public function __construct($name) {
        parent::__construct($name, "Woof");
    }
}

// Kelas turunan (subclass) dari Animal
class cat extends Animal {
    public function __construct($name) {
        parent::__construct($name, "Meow");
    }
}

// Membuat objek dari kelas Dog dan cat
$dog = new Dog("Buddy");
$cat = new cat("whiskers");

// Memanggil metode makesound() pada objek 
$dog->makeSound(); // Output: Buddy says Woof
$cat->makeSound(); // Output: Whiskers says Meow
?>