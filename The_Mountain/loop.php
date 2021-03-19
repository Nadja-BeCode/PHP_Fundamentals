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
/*****************************************While loop AND For loop************************************************** */

<h1>Let's use another loop structure to do just that: the While loop</h1>

<p><?php
$amount_of_lines = 1;

while ($amount_of_lines <= 100)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 
}
?></p>

<p>Here is a third looping structure: the For loop. Check this out :</p>

<p><?php
for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
{
    echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
}
?></p>

<p> Exercises:</p>
<p>Write a script that prints the numbers from 1 to 120 using  while</p>

<p><?php
$script = 1;

while ($script <= 120) {
   echo 'This is the line n° ' . $script . '<br/>';
   $script++;
}
?></p>

<p>Write a script that prints the numbers from 1 to 120 using  for</p>


<p><?php
for ($script = 1; $script <= 120; $script++)
{
    echo 'This is the line n° ' . $script . '<br/>';
}
?></p>

<p>Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.</p>

<p><?php
$start_up_members = array ('Pierre','Paul','Jack','Janis','Luke','Bibi');

foreach ($start_up_members as $member){
    echo ucfirst($member) . '<br/>';
}
?></p>

<p>Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form (see mockup below). Of course, a loop will be useful...</p>

<select name="choix">
    <option value="choix1">Canada</option>
    <option value="choix2">Korea</option>
    <option value="choix3">Japan</option>
    <option value="choix4">Israel</option>
    <option value="choix1">Switzerland</option>
    <option value="choix2">Portugal</option>
    <option value="choix3">Russia</option>
    <option value="choix4">Belgium</option>
    <option value="choix1">Mexico</option>
    <option value="choix2">Angola</option>
</select>

<p><?php
$coutries = array ('Canada','Korea','Angola','Portugal','Belgium','Russia','Israel','Mexico','Japan','Switzerland');
?></p>

/**************************************************************************************************** */


<?php
$countries = array(
    'CA'=> 'Canada',
    'KR'=> 'Korea',
    'JN'=> 'Japan',
    'IL'=> 'Isreal',
    'SW'=> 'Switzerland',
    'PT'=> 'Portugal',
    'RU'=> 'Russia',
    'BE'=> 'Belgium',
    'MX'=> 'Mexico',
    'AO'=> 'Angola'
);

?>

<form action="">
    <label for="country">Select a country:</label><br/>

    <select id="country" name="country">
    <?php
    foreach ($countries as $iso => $country){
    echo '<option value = ' . $country . ' />' . $iso . '</option>';
    }
    ?>
    
    
    </select><br/>
<input type="submit" value="submit">

</form>

</body>
</html>