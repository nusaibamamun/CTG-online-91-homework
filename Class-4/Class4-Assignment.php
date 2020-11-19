<!DOCTYPE html>
<html>
    <head>
    <title>Class-4</title>
    </head>
<body>
<h3>Home Work of Class-4 </h3>

<?php

//Task-1
echo "Task-1 <br> <br>";
    class Name{

        public function namePrint($firstName,$lastName)
        {
            return $firstName." ".$lastName;
        }
    }

    $name = new Name();
    
    echo $name->namePrint("Nusaiba Binte","Mamun");
    echo "<br><br><br>";


//Task-2
echo "Task-2 <br> <br>";
class variable{
        
        public $key;

        public function getterMethod($key){
            $this->key=$key;
        }

        public function setterMethod(){
            return $this->key;
        }
    }

    $final = new variable();
    $final->getterMethod(1234567890);
    echo $final->setterMethod();
    echo "<br><br><br>";


//Task-3
echo 'Task-3<br><br>';

//CaptainAmerica
include 'SuperPower.php';

    class CaptainAmerica extends SuperPower{
        
     public function __construct(){
         echo "Let's get introduced with Captain America. <br>"; 
     }
    }

    $power = new CaptainAmerica();

    echo $power->Agility();
    echo $power->Strength();
    echo "<br><br>";

//IronMan
class IronMan extends SuperPower{
        
        public function __construct(){
            echo "Let's get introduced with Thor Iron Man<br>";
        }
    }

    $power = new IronMan();

    echo $power->Flying();
    echo $power->NumberofWeapons();
    echo "<br><br>";

    //Thor
    class Thor extends SuperPower{
        
        public function __construct(){
            echo "Let's get introduced with Thor..<br>";
        }
    }

    $power = new Thor();

    echo $power->LaserEye();
    echo $power->ImmunitytoDiseases();
     echo "<br><br>";


//Task-4
echo 'Task-4<br><br>';
include 'Car.php';
    Class Audi extends Car{

        public function __construct()
        {
            echo "Discover Our Selection of New & Pre-Owned Audi Vehicles.<br>";
        }
        public $color="Color-Black";
        public $Seats="Seats-Heated & Ventilated Seats";
    }

    $car=new Audi();
    echo $car->EngineStatus."<br>";
    echo $car->BodyPart."<br>";
    echo $car->color."<br>";
    echo $car->Seats;
    echo "<br><br><br>";

//Task-5
echo 'Task-5<br><br>';
include 'Gorib.php';
    class MyStatus implements Gorib{
        public function lowMOney()
        {
            return "I don't have any money.<br>";
        }

        public function Homeless()
        {
            return "I lost my home.";
        }
    }
    $status = new MyStatus();
    echo $status->LowMoney();
    echo $status->Homeless();
    echo "<br><br><br>";

//Task-6
echo 'Task-6<br><br>';
    class TheName{
        public function __construct($name)
        {
            echo "Welcome!! ".$this->name=$name;
        }
    }

    $name= new TheName("Nusaiba Binte Mamun.");
    echo "<br><br><br>";

//Task-7
echo 'Task-7<br><br>';
    class Assignment{
        
        public function __construct($variable)
        {
            echo $this->variable=$variable;
        }

        //no-1
        public function Count($variable)
        {
            return str_word_count($variable);
        }

        //no-2
        public function SmallestWord($variable)
        {
            $test= explode(" ",$variable);
            if(strlen($test[0])<strlen($test[1]) && strlen($test[0])<strlen($test[2]) && strlen($test[0])<strlen($test[3]))
                return $test[0];
            elseif(strlen($test[1])<strlen($test[0]) && strlen($test[1])<strlen($test[2]) && strlen($test[1])<strlen($test[3]))
                return $test[1];
            elseif(strlen($test[2])<strlen($test[0]) && strlen($test[2])<strlen($test[1]) && strlen($test[2])<strlen($test[3]))
                return $test[2];
            else 
                return $test[3];
        }

        //no-3
        public function Replacing($variable)
        {
            $x= explode(" ",$variable);
            $y= str_replace("Application","WEBSITE",$x);
            $z= implode(" ",$y);
            return $z;
        }

    }

    $result = new Assignment("ADVANCED WEB APPLICATION DEVELOPMENT<br><br>");
    echo "Total Number of words in the sentence: ".$result->Count("ADVANCED WEB APPLICATION DEVELOPMENT");
    echo "<br><br>";
    echo "Lowest number of word in the sentence: ".$result->SmallestWord("ADVANCED WEB APPLICATION DEVELOPMENT");
    echo "<br><br>";
    echo "After the Replacement: ".$result->Replacing("Advanced Web Application Development");
?>
</body>
</html>