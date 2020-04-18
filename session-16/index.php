<?php 

// OOP

abstract class Item {}

// Abstract class

abstract class KitchenItem extends Item 
{
    /**
     * Cup Size
     * 
     * @var string
     */
    protected $size;

    /**
     * Cup color
     * 
     * @var string
     */
    protected $color;

    /**
     * Constructor 
     * 
     * @param  string $color
     * @param  string $size
     */
    public function __construct(string $color, string $size)
    {
        $this->size = $size;
        $this->color = $color;

        $type = static::type();
    }

    /**
     * Get cup color
     * 
     * @return string
     */
    public function getColor(): string 
    {
        return $this->color;
    }
}

class Cup extends KitchenItem 
{
    /**
     * Get item type
     * 
     * @return string
     */
    public static function type(): string 
    {
        return 'cup';
    }
}

class Knife extends KitchenItem 
{
    /**
     * Get name
     * 
     * @var name
     */
    public static $name = 'Sweet Knife';

    /**
     * Get item type
     * 
     * @return string
     */
    public static function type(): string 
    {
        // return $this->getColor(); Wrong
        return 'knife';
    }
}

// new object 
// new instance

// $redBigCup = new Cup('red', 'big'); 

// $knife = new Knife('TEst', 'OK');

// echo $redBigCup->getColor(); // 

// echo Knife::type(); // static method call
// echo Knife::$name;// static property call

// Class Members
// Properties >> Attributes
// Methods >> Functions inside classes

// Public: can be accessed from everywhere outside the class
// Protected: can be accessed only from the class itself or child/parent
// Private: can be accessed only from the class itself


abstract class Human 
{
    /**
     * Set name
     * 
     * @var string
     */
    protected $name;

    /**
     * Check if person is sleep
     * 
     * @var bool  
     */
    protected $isSleeping = false; 

    /**
     * Constructor
     * 
     * @param  string $name 
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Check if person has woke up
     * 
     * @return bool
     */
    public function hasJustAwaken(): bool 
    {
        return ! $this->isSleeping;
    }

    /**
     * Check if current user is drinking the given brand name
     * 
     * @param  string $name 
     * @return bool 
     */
    public function isDrinking(string $name): bool 
    {
        return $this->drink->brandName == $name;
    }

    /**
     * The breakfast
     * Type Hinting
     */
     public function haveBreakfast(Apple $fruit, Feno $bread, Tea $drink)
     {
         $this->fruit = $fruit;

         $this->bread = $bread;

         $this->drink = $drink;
     }

    public abstract function gender();
} 

class Male extends Human
{
    /**
     * {@inheritDoc}
     */
    public function gender()
    {
        return 'male';
    }
} 

class Female extends Human
{
    /**
     * {@inheritDoc}
     */
    public function gender()
    {
        return 'female';
    }
} 

class Apple 
{
    public function __construct($color)
    {
        $this->color = $color;
    }
}


class Feno 
{
    public function __construct($size)
    {
        $this->size = $size;
    }
}


class Tea 
{
    public function __construct($brandNme)
    {
        $this->brandName = $brandNme;
    }
}

$hasan = new Male('Hasan'); // new object | new instance0

$redApple = new Apple('red');

$kizarFeno = new Feno('Kizar');

$hasan->haveBreakfast($redApple, $kizarFeno, new Tea('Ahmed Tea'));

if ($hasan->isDrinking('Ahmed Tea')) {
    echo "Yes";
}
