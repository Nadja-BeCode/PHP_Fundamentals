<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$gender = 'M';
	$hello = ($gender == 'F') ? 'Hello Miss' : 'Hello Boy';
	echo $hello;
	?>
</body>
</html>


Example:

$age = 24;
$is_adult = ($age >= 18) ? true : false;

// $is_adult is true
Which is a shorter way to write the following :

$age = 24;
if ($age >= 18)
{
	$is_adult = true;
} else {
	$is_adult = false;
}
// $is_adult is true