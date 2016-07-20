<?php
    session_start();

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $secondName = isset($_POST['secondName']) ? $_POST['secondName'] : '';
    $gsm = isset($_POST['gsm']) ? $_POST['gsm'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $someTest = isset($_POST['someTest']) ? $_POST['someTest'] : '';

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP AND THE WEB</title>
    <link rel="stylesheet" type="text/css" href="exersice-09.css">
</head>

<body>
    <div class="form-div">
    	<a href="exersice-09form.php">Click back</a>
    	<form method="get" action="exersice-09form.php">
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
	    		<button>Send</button>
	    	</div>
		    <div class="paragraff">
			    <p><?=$name?></p> 
			    <p><?=$secondName?></p>
			    <p><?=$gsm?></p>
			    <p><?=$country?></p>
			    <p><?=$someTest?></p>
			</div>
	    </form>
    </div>
</body>
</html>