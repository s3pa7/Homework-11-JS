<?php 
$errors = '';
$celsius = '';
$fahrenheit = '';
$result = '';
if (!empty($_POST)) {
	$celsius = isset($_POST['celsius']) ? $_POST['celsius'] : '';
	$fahrenheit = isset($_POST['fahrenheit']) ? $_POST['fahrenheit'] : '';
	$select = $_POST['select'];
	if(!is_numeric($celsius) || !is_numeric($fahrenheit)){
		$errors =  "All field are mandatory";
	}else {
		if($select == "C") {
			$result = ( 5 / 9 ) * ($fahrenheit -32);
		}
		if($select == "F") {
			$result = ( 5 / 9 ) * ($celsius -32);

		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculate Farenheit Celsius</title>
<link rel="stylesheet" type="text/css" href="exersice-03.css">
</head>
<body>
	<div class="form-div">
		<form action="" method="post">
			<div>
				<label for="celsius">Celsius C</label>
				<input  type="number" name="celsius" value="<?= $celsius ?>">
			</div>
			<div>
				<label for="fahrenheit">Fahrenheit F</label>
				<input type="number" name="fahrenheit" value="<?= $fahrenheit ?>">
			</div>
			<div>
				<label for="select">Change</label>
				<select name="select">
					<option value="C">Celsius</option>
					<option value="F">Fahrenheit</option>
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