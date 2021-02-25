<?php

//ques 1
class student {
  
  public $name;
  public $roll_no;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$student1 = new student();
$student2 = new student();
$student1->set_name('tarun');
$student2->set_name('shubham');

echo "student1 name is ". $student1->get_name();
echo "<br>";
echo "student2 name is ".  $student2->get_name();


//ques 5
class student2
{  
      
    Public $name; 
  
    Public $roll_no; 
  
    function __construct($name,$roll_no) 
  
    { 
        
        $this->name=$name; 
        $this->roll_no=$roll_no; 
  
  
    }     
    
    function show_details() 
    { 
        echo $this->name." : "; 
        echo "Your rollno is ".$this->roll_no."\n"; 
    } 
} 
      
$obj= new student2("tarun","3"); 
$obj->show_details(); 

//ques 6
Class factorial
{

  protected $int;

  public function __construct($Int)
  {
    if(!is_int($Int))
      {
            throw new InvalidArgumentException('Not a valid integer');
      }

      $this->int = $Int;  
    }
   function fact()
  {
    $factorial = 1;
    for($i = 1; $i<= $this->int; $i++) 
     {
       $factorial = $factorial *$i;
     }
   return $factorial;
  }


}
$obj = new factorial(5);
echo $obj->fact();

//ques 7
abstract class Abstractclass
{
    
    abstract protected function getValue();

    public function val() {
        print $this->getValue() . "\n";
    }
}

class classforextent extends AbstractClass
{
    protected function getValue() {
        return "tarun";
    }
}
$obj = new classforextent;
$obj->val();


//ques 9
class Student3 {
 
    public $name="";
    public $rollno="";
    
    public function name($name="")
    {
      $this-> name = $name;
   
    }
    public function rollno($rollno="")
    {
      $this-> rollno = $rollno;
   
    }
    public function fullinfo(){
        echo "My name is ".$this->name." and my rollno is".$this->rollno;
    }
    
    
  }
$obj = new student3();
$obj->name("tarun");
$obj->rollno("10");
$obj->fullinfo();

//ques 11
class India
{
public function function_a(){
echo “Country_is_India”;
}
}

class Haryana extends India
{
public function function_b(){
echo “state_is_haryana”;
}
}

class Faridabad extends Haryana
{
public function function_c(){
echo “city_is_faridabad”;
}
}

echo Faridabad::function_c();
echo Faridabad::function_b();
echo Faridabad::function_a();

//ques 8
class Car {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "Car is {$this->name} and the color is {$this->color}.";
  }
}

class fortuner extends Car {
  public function message() {
    echo "milege is 15km/l ";
  }
}
$obj = new fortuner("fortuner", "white");
$obj->message();
$obj->intro();

//ques 13
trait A {
    function calcA() {
        echo "traitA"."\n";
    }
}
trait B {
    function calcB() {
        echo "traitB"."\n";
    }
}
trait C {
    function calcC() {
        echo "traitC"."\n";
    }
}
class MyClass {
    use A,B,C;
function calcA() {
      echo "classA"."\n";
    }
    function calcB() {
        echo "classB"."\n";
    }
    function calcC() {
        echo "classC"."\n";
    }
}
$obj=new MyClass();
$obj->calcA();
$obj->calcB();
$obj->calcC();
?>



