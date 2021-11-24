<?php

$num1 = intval($_POST['number1']);
$num2 = intval($_POST['number2']);
$oper = $_POST['operation'];

switch ($oper) {
	case '+':
		$sum = $num1 + $num2;
		echo 'Sum is : ' .$sum ;
		break;
	case '-':
		$difference = $num1 - $num2;
		echo 'Difference is : ' .$difference;
		break;
	case '*':
		$product = $num1 * $num2;
		echo 'Product is : ' .$product;
		break;
	case '/':
		$quotient = $num1 / $num2;
		$reminder = $num1 % $num2;
		echo 'Quotient is : ' .$quotient;
		echo 'Reminder is : ' .$reminder;
		break;
?>
