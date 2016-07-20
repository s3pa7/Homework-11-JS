<?php
$errors = '';
$array = [];
$max = '';
$lower = '';
for ($i = 1; $i <= 10; $i++) {
	if (!empty($_POST[$i])) {
		array_push($array, $_POST[$i]);
		$lower = min($array);
		$max = max($array);
	}
	if(empty($_POST[$i])){
		$errors = "All field are mandatory";
		$lower = '';
		$max = '';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Get Max min</title>
<link rel="stylesheet" type="text/css" href="exersice-04.css">
</head>
<body>
	<div class="form-div">
		<form action="" method="post">
			<div>
				<label for="number1">number1</label>
				<input  type="number" name="1">
			</div>
			<div>
				<label for="number2">number2</label>
				<input  type="number" name="2">
			</div>
			<div>
				<label for="number3">number3</label>
				<input  type="number" name="3">
			</div>
			<div>
				<label for="number4">number4</label>
				<input  type="number" name="4">
			</div>
			<div>
				<label for="number5">number5</label>
				<input  type="number" name="5" >
			</div>
			<div>
				<label for="number6">number6</label>
				<input  type="number" name="6">
			</div>
						<div>
				<label for="number7">number7</label>
				<input  type="number" name="7">
			</div>
			<div>
				<label for="number8">number8</label>
				<input  type="number" name="8">
			</div>
			<div>
				<label for="number9">number9</label>
				<input  type="number" name="9">
			</div>
			<div>
				<label for="numberTen">number10</label>
				<input  type="number" name="10">
			</div>
			<div>
				<label for="maximum">Maximum</label>
				<input  type="number" name="maximum" value="<?= $max ?>">
			</div>
			<div>
				<label for="minimum">Minimum</label>
				<input  type="number" name="minimum" value="<?= $lower ?>">
			</div>
			<button type="submit">Submit</button>
			<p><?= $errors  ?></p>
		</form>
	</div>
</body>
</html>	