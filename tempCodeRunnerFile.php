<?php
// Abstract class สำหรับสัตว์
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound();
}

// สร้างคลาสลูก Dog ที่สืบทอดจาก Animal
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

// สร้างคลาสลูก Cat ที่สืบทอดจาก Animal
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// ใช้ Polymorphism
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

echo $dog->name . " says: " . $dog->makeSound(); // ผลลัพธ์: Buddy says: Woof!
echo $cat->name . " says: " . $cat->makeSound(); // ผลลัพธ์: Whiskers says: Meow!