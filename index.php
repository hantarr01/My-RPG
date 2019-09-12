<?php
abstract class AbstractClass
{
    abstract protected function properties($name, $height, $power, $weight);
}

class warrior extends AbstractClass{
     public function properties($name="Warrior", $height= "180sm", $power= "Man", $weight= "120kg") {
        if ($name == "warrior") {
            echo "Abilities: I hammer the enemies we throw";
            echo "<br/>";
            echo "--------------------";
            echo "<br/>";
        } 
        return "Name: {$name}<br/> Height: {$height}<br/> Power: {$power}<br/> Weight: {$weight}";
    }
}


class archer extends AbstractClass{
     public function properties($name="Archer", $height= "160sm", $power= "weakling", $weight= "65kg") {
        if ($name == "archer") {
            echo "Abilities: I shoot a bow";
            echo "<br/>";
            echo "--------------------";
            echo "<br/>";
        } 
        return "Name: {$name}<br/> Height: {$height}<br/> Power: {$power}<br/> Weight: {$weight}";
    }
}

class magician extends AbstractClass{
     public function properties($name="Magician", $height= "173sm", $power= "old weakling", $weight= "60kg") {
        if ($name == "magician") {
            echo "Abilities: I 'm weak, but I can blink with a fireball";
            echo "<br/>";
            echo "--------------------";
            echo "<br/>";
        } 
        return "Name: {$name}<br/> Height: {$height}<br/> Power: {$power}<br/> Weight: {$weight}";
    }
}

$class = new warrior;
echo $class->properties("warrior"), "\n";

echo "<br/>";echo "<br/>";echo "<br/>";

$class2 = new archer;
echo $class2->properties("archer"), "\n";

echo "<br/>";echo "<br/>";echo "<br/>";

$class2 = new magician;
echo $class2->properties("magician"), "\n";

?>


