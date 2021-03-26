<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
<p> What are functions ? What is their purpose ?</p>
<?php

//Example: transform a string
//The str_shuffle() function (read it as : "shuffle string") makes it easy to ... shuffle the characters of a given text.

$str = 'This is going to be shuffled !';
$str = str_shuffle($str);
 
echo $str;
?></p>


<p><?php
$str= " This is because the human mind does not read every letter by itself but the word as a whole.";

$str= explode(" ", $str);
foreach ($str as $word){
	echo str_shuffle($word)." ";
}
?></p>
// Exercises :
// Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
<p><?php
echo mb_convert_case('émile', MB_CASE_TITLE, "UTF-8");
?></p>

<p>Use the native function allowing you to display the current year.</p>
<?php
$year = date('Y');
echo 'Bonjour ! Nous sommes en ' . $year;
?>

<p>Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.</p>

<?php

$day = date('d');
$hour = date('H');
$minute = date('i');
$seconde = date('s');

echo 'Bonjour ! Nous sommes le ' . $day . 'et il est ' . $hour . ' h ' . $minute. 'et' . $seconde .'seconde';
?>





</body>
</html>