<?php
$errors = '';
$count = empty($_POST['count']) ? 0 : (int) $_POST['count'];
$name = isset($_POST['name']) ? $_POST['name'] : '';
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';

if (empty($name) || empty($fname)) {
        $errors = 'You must fill all fields!';
        $request = '';
    }else {
    	$errors = '';
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task8</title>
<link rel="stylesheet" type="text/css" href="exersice-08.css" />
</head>
<body>
	<div class="form-div">
		<h3>The number of times this form has been submitted is: <?= $count;?></h3> 
		<form action="" method="post">
			<div>
				<label for="name">Name</label>
				<input type="text" name="name" value="<?= $name;?>">
			</div>
			<div>
			<label for="fname">Family</label>
			<input type="text" name="fname" value="<?= $fname;?>">
			</div>
			<div>
				<input type="hidden" name="count" onclick="<?php $count++?>" value="<?=$count;?>">
			</div>
			<div>
				<button type="submit">Submit</button>
			</div>
			<p> <?= $errors ?></p>
		</form>
	</div>
</body>
</html>