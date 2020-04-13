<!DOCTYPE html>
<html>
<head>
	<title>My Php Beginning Level</title>
</head>
<body>
	<?php // <?php is a php comment to start
    // declare a variable in php 
	$userName = "CodingNewBie";
	$userAge = 21;
    // echo use in php to print or show smthing in web
	echo "<h1>Hello World $userName $userAge</h1>";
	echo "<hr>";
	echo "Hello everybody my name is $userName and I was born in 2020 and now i am $userAge.";
	?> 

<!--  basics of strings in php -->
	<?php
	$textName = "Hello my name is CodingNewBie";
	$userAge = 21;
	$userGPA = 30.9;

	echo strtolower($textName); // to lower case
	echo strtoupper($textName); // to upper case
	echo strlen($textName); // to see len of string
	echo "$userName[0]"; // to connect with certain part of string
	echo str_replace("CodingNewBie", "Google", $textName) //replace word (old word, new word, where is the word we wanna change)
	echo substr($textName, 6, 12);
	echo $userAge - 10; //some of math oprt in var of php
	echo 10 * 20 + 10 - 10;
    ?>

<!--   basics of forms in php -->
    <form method="get" action="myphp.php">
 	      Name: <input type="text" name="user_name"><br>
 	      Age : <input type="number" name="user_age"><br>
 	            <input type="submit" name=""><br>
    </form>
   
    Hello your name is <?php echo $_GET["user_name"] ?>
    <h1><?php echo $_GET["user_age"] ?></h1> 

<!-- another simple example to php forms -->
<form action="myphp.php" method="GET">
    <input type="number" name="user_first_number"> <br>
    <input type="number" name="user_second_number"> <br>
	<input type="submit"> <br>
    Result: <?php echo $_GET["user_first_number"] + $_GET["user_second_number"]  ?>
</form>

<!-- another simple example to php forms -->
<form action="myphp.php" method="get">
	Roses are <input type="text" name="rose_color"><br>
	Life is <input type="text" name="life_rule"><br>
	Sky is <input type="text" name="sky_color"><br>
	<input type="submit" name=""> 
</form>
<?php
 $rose_color = $_GET["rose_color"];
 $life_rule = $_GET["life_rule"];
 $sky_color = $_GET["sky_color"];
?>
<h1>Output: <?php echo "Roses are $rose_color, Life is $life_rule and Sky is $sky_color."; ?></h1>

<!-- another simple example to php forms -->
<form action="myphp.php" method="post">
	<input type="password" name="user_password" placeholder="password">
	<input type="submit" name="">
</form>
<?php echo $_POST["user_password"]; ?>
<!-- POST more secure not appear in url but get will appear in urls -->

<!-- arrays in php -->
<?php
$user_names = array("Azizbek", "Alijon", "Abudurauf", "Abubakr","Murod")
?>
<h1>Welcome to our website: </h1><?php echo $user_names[1]; ?>
<h2>Total:</h2> <?php echo count($user_names); ?>


<!-- another example for forms with arrays in php  -->
<form action="myphp.php" method="get">
	Apples : <input type="checkbox" name="fruits[]" value="Apples"><br>
	Oranges : <input type="checkbox" name="fruits[]" value="Oranges"><br>
	Grapes : <input type="checkbox" name="fruits[]" value="Grapes"><br>
    <input type="submit" name="">
</form>
<?php 
  $fruits = $_GET["fruits"];
  echo $fruits[1];
 ?>

<!-- another example for forms with arrays in php  -->
<form action="myphp.php" method="POST">
	<input type="text" name="student"><br>
	<input type="submit">
	
</form>
<?php 
$student_names = array("Azizbek" => "A+", "Murod" => "C+", "Abubakr" => "F");
echo $student_names[$_POST["student"]];
?>


<!-- functions in php -->
<?php 
function say_hi($num1, $num2){
	return $num1 * $num2;
}
$function = say_hi(5, 3);
echo "$function";
?> 

<!-- if condition in php -->
<?php 
$isMale = true;
if ($isMale = true) {
	echo "Male";
}
 ?> 

<!-- if condition in php with function exercise -->
<?php 
function find_max_number($number1, $number2){
	if ($number1 > $number2) {
		return $number1;
	}else{
		return $number2;
	}
}
echo find_max_number(40, 41);
 ?> 

<!-- if condition in php with function exercise -->
<form method="POST" action="myphp.php">
	Number1 : <input type="number" name="number1"><br>
	Operation: <input type="text" name="operation"><br>
	Number2 : <input type="number" name="number2"><br>
	<input type="submit"><br>
	
</form>
<?php 
$operation = $_POST["operation"];
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];

function calculator($number1, $number2, $operation){
	if($operation == "+"){
	echo $number1 + $number2;
    }elseif ($operation == "*") {
	echo $number1 * $number2;
    }elseif ($operation == "-") {
	echo $number1 - $number2;
    }elseif ($operation == "/") {
	echo $number1 / $number2;
    }else{
	echo "Invalid Operation.";
    }
}
echo calculator($number1, $number2, $operation);
 ?> 
 
<!--  switch in php exercise -->
<form method="POST" action="myphp.php">
	<h4>What was your score?</h4> 
	<input type="text" name="grade"><br>
	<input type="submit" >
</form>
<?php 
$grade = $_POST["grade"];
switch ($grade) {
	case 'A':
		echo "Your Score is A. The best Score ever.";
		break;
	case 'A+':
		echo "Your Score is A+. The good Score ever.";
		break;
	case 'B':
		echo "Your Score is B. The normal Score ever.";
		break;
    case 'B+':
		echo "Your Score is B+. The normal Score.";
		break;
	
	default:
		echo "Your are Nub (:";
		break;
}
 ?> -->

<!-- while in php -->

<?php 
$index = 1;
while ($index <= 10) {
	echo "Index is $index now. <br>";
	$index ++;
}
 ?> 

<!-- do while in php -->
<?php 
$number = 4; 
do{
	echo "$number is your number.";
	$number ++;
}while ($number <= 3) 
?> 

<!-- for loop in php -->
<?php 
$array_of_numbers = array(4, 5, 6, 7, 8, 9);
for ($i = 0; $i <= count($array_of_numbers); $i++) { 
	echo "$array_of_numbers[$i]";
}
  ?> 
<!-- class and object in php -->
<?php 
class Car{
	var $name;
	var $size;
	var $model;
	function __construct(){
		echo "New book created.<br>";
	
    }
}

	$car01 = new Car;

	$car01->name = "Spark";
	$car01->size = 250;
	$car01->model = "version XSmax 250";
	echo $car01->model;



 ?>
 
<!-- class and object (__construct) in php --> 
<?php 

class Car_original{
	var $Name;
	var $Model;
	var $Owner;
	var $Color;
	var $Size;
	function __construct($carName, $carModel, $carOwner, $carColor, $carSize){
	    $this ->Name = $carName;
	    $this ->Model = $carModel;
	    $this ->Owner = $carOwner;
	    $this ->Color = $carColor;
	    $this ->Size = $carSize;
	}

}
$car01 = new Car_original("Spark", "Chevro", "Azizbek", "Red", 250);
echo $car01->Name;
 ?> 

<!-- class and object (__construct) and function in php --> 
<?php 
class Student{
	var $name;
	var $GPA;
	var $major;
	function __construct($Sname, $SGPA, $Smajor)
	{
		$this->name = $Sname;
		$this->GPA = $SGPA;
		$this->major = $Smajor;
	}
	function isHonor(){
		if ($this->GPA > 3){
			echo "This student has high grades in all subjects.";
		
		}else{
			echo "This student has pretty low scores in all classes. Please try to study harder.";
		}
	}

}

$student01 = new Student("Azizbek" , 2.1, "IT");
echo $student01->isHonor();

 ?>

 <!-- class and object (__construct), get and set in php --> 

<?php 
 
 class Movie{
 	private $name;
 	private $year;
 	private $code;
 	
 	function __construct($Mname, $Myear, $code){
 		$this->name = $Mname;
 		$this->year = $Myear;
 		$this->setCode($code);

 	}
 	function getCode(){
 		return $this->code;
 	}
 	function setCode($code){
 		if ($code == "BOA" || $code == "NHS" || $code == "SSS"){
 			return $this->code = $code;
 		}else{
 			return $this->code = "NF";
        }

 	}
 }

 $movie01 = new Movie("Avangers", 2019, "BOA");
 $movie01->setCode("BOA");
 echo $movie01->getCode();


 ?>

 




<!-- create one php page and write like echo $variable but don't give value in another page
give value to $variable and include "file_name.php" -->
<!-- <?php include "file_name.html" //is used to call html codes to here ?> -->
<!--  // is use to comment -->

</body>
</html> 