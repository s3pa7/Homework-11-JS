<?php
	$errors = '';
    $showPass = '';
    $diffPass = '';
    $name = '';
    $salt = '';
    if (!empty($_POST)) {
        $name = isset($_POST['userName']) ? $_POST['userName'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $rePassword = isset($_POST['rePassword']) ? $_POST['rePassword'] : '';

        if (empty($name) || empty($password) || empty($rePassword)) {
            $errors = 'You must fill all the fields!';
        };
        if (!empty($name) && !empty($password) && !empty($rePassword)) {
            $errors = '';
            
        }
        if ($password === $rePassword && $password != '') {
            $showPass = crypt($password , $salt);
        }
        if ($password != $rePassword) {
        	$errors = 'Your password dont much!';
        }

    };

?>

<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Form password</title>
	<link rel="stylesheet" type="text/css" href="exersice-02.css">
	</head>
	<body>
		<div class="form-div">
			<form action="" method="post">
			<div>
				<label for="userName">Please enter username</label>
				<input name="userName" type="text" value="<?= empty($_POST['userName']) ? '' : $_POST['userName']; ?>">
			</div>
			<div>
				<label for="password">Please enter a password</label>
				<input name="password" value="<?= $showPass ?>">
			</div>
			<div>
				<label for="rePassword">Please enter again password</label>
				<input name="rePassword" value="<?= $showPass ?>">
			</div>
			<button type="submit">Submit</button>
			<p><?= $errors  ?></p>
			</form>
		</div>
	</body>
	</html>