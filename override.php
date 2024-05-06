<?php
// Kelas dasar
class Animal {
    // Metode yang akan di-override
    public function makeSound() {
        echo "Bunyi hewan...";
    }
}

// Kelas turunan yang akan melakukan override
class Dog extends Animal {
    // Override metode makeSound
    public function makeSound() {
        echo "Guk guk!";
    }
}

// Kelas turunan lainnya
class Cat extends Animal {
    // Override metode makeSound
    public function makeSound() {
        echo "Meong meong!";
    }
}

// Penggunaan kelas kelas
$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

// Memanggil metode makeSound dari masing-masing objek
$animal->makeSound(); // Output: Bunyi hewan...
echo "<br>";
$dog->makeSound(); // Output: Guk guk!
echo "<br>";
$cat->makeSound(); // Output: Meong meong!
?>