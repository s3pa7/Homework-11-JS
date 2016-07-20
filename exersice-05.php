<?php
$errors = '';
$request = [];
$name = '';
if(!empty($_POST)) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $request = $_REQUEST;
    if (empty($name) || empty($fname)) {
        $errors = 'You must fill all fields!';
        $request = '';
    } else {
        $errors = '';
    }
 
}

	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Name </title>
<link rel="stylesheet" type="text/css" href="exersice-05.css">
</head>
<body>
	<div class="form-div">
		<form action="" method="post">
			<div>
				<label for="name">Name</label>
				<input name="name">
			</div>
			<div>
				<label for="fname">Family</label>
				<input name="fname">
			</div>	
			<div>
				<button type="submit">Submit</button>
			</div>
			<p><?= print_r($request)?></p>
			<p><?= var_dump($request)?></p>
		</form>
	
	</div>
</body>
</html>