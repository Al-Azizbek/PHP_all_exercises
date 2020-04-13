<!DOCTYPE html>
<html>
<head>
	<title>MySimpleCalculator with PHP, Bootstrap, Html and CSS.</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="container" style="margin-top: 70px; background-color: #080602;">
	<h1 class="text-center" style="padding-bottom: 50px; color: #FFD242;">CodingNewBie Simple Calculator</h1>
	<h3 style="color: white;">Rules:</h3>
	<p style="color: white;">Any operation over integer numbers are <span style="color: red;">POSSIBLE!</span></p>
	<p style="color: white;"><span style="color: red;">DON'T ENTER!</span> more than 4 decimal numbers after "." eg(0.1234) <span style="color: red;">NOT</span> (0.12345)</p>
 
	<form action="simpleCalculator.php" method="POST">
		<input class="form-control" type="number" step="0.0001" name="number_one" placeholder="Please First number..."><br>
		<input class="form-control" type="text" name="operation" placeholder="operation"><br>
        <input class="form-control" type="number" step="0.0001" name="number_second" placeholder="Please Second number..."><br>		
	    <input type="submit" class="form-control" ><br>
	    <hr>
	</form>
	<?php 
       $number_one = $_POST["number_one"];
       $number_second = $_POST["number_second"];
       $operation = $_POST["operation"];
       
       function calculator($number_one, $number_second, $operation){
       	$add = $number_one + $number_second;
        $sub = $number_one - $number_second;
        $mul = $number_one * $number_second;
        $div = $number_one / $number_second;
        $mod = $number_one % $number_second;
       	switch ($operation) {
       		case "+":
       		    echo '<div style="font-size:40px; color:#FFD242;">'."<h1>Result of addition: </h1>".$add.' </div>';       
       			break;
       		case "-":
       			echo '<div style="font-size:40px;color:#FFD242;">'."<h1>Result of subtraction: </h1>".$sub.' </div>';  
       			break;
       		case "*":
       			echo '<div style="font-size:40px;color:#FFD242;">'."<h1>Result of multiplication: </h1>".$mul.' </div>';  
       			break;
       		case "/":
       			echo '<div style="font-size:40px;color:#FFD242;">'."<h1>Result of division: </h1>".$div.' </div>';  
       			break;
       		case "%":
       			echo '<div style="font-size:40px;color:#FFD242;">'."<h1>Result of module: </h1>".$mod.' </div>';  
       			break;
       		default:
       		    echo '<i style="color:red; font-size:40px;"> Wrong Input. Check your operation. Available operations ( + ,  - ,  % , *  and  / ). </i> ';
       			break;
       	}
       }

       echo calculator($number_one, $number_second, $operation);
    ?>
  

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>