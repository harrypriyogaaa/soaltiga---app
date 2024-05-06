<?php
// Kelas dengan enkapsulasi
class Person { 
    private $name;
    private $age;

    // Metode setter untuk mengatur nilai name
    public function setName($name) {
        $this->name = $name;
    }
    // Metode getter untuk mengambil nilai name
    public function getName() {
        return $this->name;
    }
    // Metode setter untuk mengatur nilai age
    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        }
    }
    // Metode getter untuk mengambil nilai age
    public function getAge() {
        return $this->age;
    }
}

// Penggunaan kelas Person
$person = new Person();
$person->setName("Harry Priyoga");
$person->setAge(30);

echo "Nama"  . $person->getName() . "<br>";
echo "Usia"  . $person->getAge() . "<br>";
?>