<html>
<head>
<title> <?php echo "PHP Object Oriented Programming";?></title>    
</head>
<body>
<?php
class Animal implements Singable{
    protected $name;
    protected $favorite_food;
    protected $sound;
    protected $id;

    public static $number_of_animal =0;
    
    const PI = "3.14159";
    function getName(){
        return $this->name;
    }
    function __construct(){
        
        $this->id = rand(100,1000000);
        
        echo $this->id. "has been assigned<br />";

        Animal::$number_of_animal++;

    }

    public function __destruct(){
        echo $this->name ."is being destroyed :(";
    }

    function __get($name){
        echo "Asked for " . $name . "<br />";
        return $this->$name;
    }

    function __set($name, $value ){
        switch ($name) {
            case "name":
                $this->name = $value;
                break;
            case "favorite_food":
                $this->favorite_food = $value;
                break;
            case "sound":
                    $this->sound = $value;
                    break;
            default:
                echo $name . "Not Found";                
        }
        echo "Set " . $name . " to " . $value . "<br />";
    }
    function run(){
        echo $this->name . " run<br />";
    }

    final function what_is_good(){
        echo "running is good <br ?>";
    }

    function __toString(){
        return $this->name. " Say " . $this->sound . 
        " give me some " . $this->favorite_food . " my id is " . 
        $this->id . " total animals = " . Animal::$number_of_animal .
        "<br /><br />";
    }

    function sing(){

        echo $this->name . "sings Grrr Grrr Grrr Grrr";
    }
}
class Dog extends Animal implements Singable{
    function run(){
        echo $this->name . "run like crazy<br />";
    }

    function sing(){

        echo $this->name . "sings Boww Boww Boww";
    }
}

interface Singable{
    public function sing();
}

$animal_one = new Animal();
$animal_one->name = "Spot";
$animal_one->favorite_food ="Meat";
$animal_one->sound ="Ruff";

echo $animal_one->name. " Say " . $animal_one->sound . 
    " give me some " . $animal_one->favorite_food . " my id is " . 
    $animal_one->id . " total animals = " . Animal::$number_of_animal .
    "<br /><br />";
   
echo "Favorite Number " . Animal::PI . "<br />";

$animal_two = new Dog();
$animal_two->name = "Grover";
$animal_two->favorite_food ="Carrot";
$animal_two->sound ="Grrrr";

echo $animal_two->name. " Say " . $animal_two->sound . 
    " give me some " . $animal_one->favorite_food . " my id is " . 
    $animal_two->id . " total animals = " . Dog::$number_of_animal .
    "<br /><br />";

$animal_one->run();
$animal_two->what_is_good();   

echo $animal_one;

$animal_one->sing(); 
$animal_two->sing(); 

// echo "Favorite Number " . Animal::PI . "<br />";
?>   
</body>
</html>