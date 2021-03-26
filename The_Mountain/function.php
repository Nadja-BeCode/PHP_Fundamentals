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
    
    $name = "Maurice";
echo "<p>Hello $name!</p>";
echo '<hr>';
$name = "Alice";
echo "<p> Hello $name!</p>";
echo '<hr>';
$name = "Jesus";
echo "<p> Hello $name!</p>";
echo '<hr>';
$name = "Judas";
echo "<p> Hello $name!</p>";
echo '<hr>';
// OUTPUT
Hello Maurice!
_______________________________
Hello Alice!
_______________________________
Hello Jesus!
_______________________________
Hello Judas!

//First, you need to declare the function to make it available. It is stored in memory, not ran.
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}

// Function calls during "Runtime" :
say_hello("Maurice")
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");

// OUTPUT

Hello Maurice!
_______________________________
Hello Alice!
_______________________________
Hello Jesus!
_______________________________
Hello Judas!
_______________________________

    ?>

</body>
</html>