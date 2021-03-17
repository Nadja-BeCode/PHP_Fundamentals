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

<?php
 $gender = 'M';
 $hello = ($gender == 'F') ? 'Hello Miss' : 'Hello Boy';
echo $hello;
?>