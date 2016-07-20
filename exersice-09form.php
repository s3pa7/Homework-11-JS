<?php
    session_start();
    $error = '';
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $secondName = isset($_GET['secondName']) ? $_GET['secondName'] : '';
    $gsm = isset($_GET['gsm']) ? $_GET['gsm'] : '';
    $country = isset($_GET['country']) ? $_GET['country'] : '';
    $someTest = isset($_GET['someTest']) ? $_GET['someTest'] : '';
    
    if (!preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/', $name)) {
    	$error = 'Your username does not match the requirements!';
    }
    if (!preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/', $secondName)) {
    	$error =  'Your username does not match the requirements!';
    }
    if(($name == '') && ($secondName == '') &&  ($country == '') && ($someTest && '' )){
    	$error = 'Your username does not match the requirements!';
    }
	
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP AND THE WEB</title>
  	<link rel="stylesheet" type="text/css" href="exersice-09form.css">
</head>

<body>
    <div class="form-div">
       <a href="exersice-09.php">Click ahead</a>
  	   <form method="post" action="exersice-09.php">
  	  		<div>
			    <label>Name:</label>
			    <input name="name">
			</div>
			<div>
			    <label>Last Name</label>
			    <input name="secondName">
			</div>
			<div>
			    <label>Gsm</label>
			    <input type="number" name="gsm">
			</div>
			<div>
			    <label>Country</label>
			    <input name="country">
			</div>
			<div>
			    <label>Some text</label>
			    <input name="someTest">
			</div>
			<div>	
	    		<button name="btn" type="submit">Send</button>
	    	</div>
			<div class="paragraff">
			    <p><?=$name?></p> 
			    <p><?=$secondName?></p>
			    <p><?=$gsm?></p>
			    <p><?=$country?></p>
			    <p><?=$someTest?></p>
			</div>
			<h3><?= $error ?></h3>
    	</form>
  	 </div>
</body>
</html>