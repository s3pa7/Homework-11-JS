<?php
$text = '';
$ftext = '';
$error = '';
if (!empty($_POST)) {
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
	$date = isset($_POST['date']) ? $_POST['date'] : '';
	$month = isset($_POST['month']) ? $_POST['month'] : '';
	$year = isset($_POST['year']) ? $_POST['year'] : '';
	 
	if(is_numeric($name)){
		$error = "Please enter only word";
		$text = $name;
	}

	if(is_numeric($fname)){
		$error = "Please enter only word";
		$ftext = $fname;
	}
	if($name == '' || $fname = ''){
		$error = "The field is matdatory";
		$text = $name;
		$ftext = $fname;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Name </title>
<link rel="stylesheet" type="text/css" href="exersice-06.css">
</head>
<body>
	<div class="form-div">
		<h1>Forms</h1>
		<form action="" method="post">
			<div >
				<label class="label" for="name">Name</label>
				<input  type="text" name="name" value="<?= $text ?>">
			</div>
			<div>
				<label class="label" for="fname">Familia</label>
				<input  type="text" name="fname" value="<?= $ftext ?>">
			</div>
			<div class="select">
				<label for="date">Date</label>
				<select id="date" name="date">
				<?php 
				for($i = 1 ;$i <= 31; $i++){
					echo '<option value="' .$i.'">'.$i.'</option>';
				}
				?>
				</select>
				<label for="month">Month</label>
				<select id="month" name="month">
				<?php 
				for($i = 1 ;$i <= 12; $i++){
					echo '<option value="' .$i.'">'.$i.'</option>';
				}
				?>
				</select>
				
				<label for="year">Year</label>
				<select id="year" name="year">
				<?php 
				for($i = 1990 ;$i < date("Y")+1; $i++){
					echo '<option value="' .$i.'">'.$i.'</option>';
				}
				?>
				</select>
			</div>
			<div>
				<button type="submit">Submit</button>
			</div>
			<p><?=  $error ?></p>
		</form>
	</div>
</body>
</html>
