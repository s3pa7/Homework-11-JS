<?php 
	$result = '';
	$errors = '';
	$number1 = '';
	$number2 = '';
	if (!empty($_GET)) {
		$number1 = isset($_GET['numberOne']) ? $_GET['numberOne'] : '';
		$number2 = isset($_GET['numberTwo']) ? $_GET['numberTwo'] : '';
		$select = $_GET['select'];
			if(!is_numeric($number1) || !is_numeric($number2)){
				$errors =  "All field are mandatory";
			}else {
				if($select == "Addition"){
					$result = $number1	+ $number2;
				}
				if ($select == "Subtraction"){
					$result = $number1	- $number2;
				}
				if($select == "Multiplication"){
					$result = $number1	* $number2;
				}
				if($select == "Division"){
					$result = $number1	/ $number2;
				}
		}
	}
	
?>

<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Calculation</title>
	<link rel="stylesheet" type="text/css" href="exersice-01.css">
	</head>
	<body>
		<div class="form-div">
			<form action="" method="get">
			<div>
				<label for="numberOne">Please Enter First Numbers</label>
				<input name="numberOne" type="number" value="<?= $number1 ?>">
			</div>
			<div>
				<label for="numberTwo">Please Enter Second Numbers</label>
				<input name="numberTwo" type="number" value="<?= $number2 ?>">
			</div>
			<div>
				<label >Please Enter a Mathemathic Actions</label>
				<select name="select">
					<option value="Addition">Addition</option>
					<option value="Subtraction">Subtraction</option>
					<option value="Multiplication">Multiplication</option>
					<option value="Division">Division</option>
				</select>
			</div>
			<div>
				<label for="results">The Result</label>
				<input name="results" value="<?= $result ?>">
			</div>
			<button type="submit">Submit</button>
			<p><?= $errors  ?></p>
			</form>
		</div>
	</body>
	</html>