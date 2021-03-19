<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>

<h1>Loops FTW !</h1>


<p><?php
    $names= array('John', 'jeanne', 'Joan', 'émile');
    foreach ($names as $name){
        echo ucfirst($name) . '<br/>';
    }

?></p>

/***************************************************************** */
<p><?php
    $names = array ('John' , 'jeanne' , 'Joan' , 'émile');
    var_dump($names);
    
    foreach ($names  as  $key => $value) {
         $names [$key] = ucfirst ($value);
    }
    var_dump($names);

?></p>

/*****************************EXERCICE************************************ */
<p><?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $pronoun){
    echo '<p>'. $pronoun . ' code';
	if ($pronoun === 'He/She') {
    echo 's </p>';
    }
    //echo '</p>';
}

/*$pronouns = ['I', 'You', 'He/She','We', 'You', 'They'];
        
            foreach ($pronouns as $pronoun){
                if (strpos($pronoun, 'He' ) !== FALSE){
                    echo $pronoun .' codes <br/>';
                }else {
                    echo $pronoun .' code <br />';
                }
            }
*/
?></p>

You can also loop inside a string

</body>
</html>