<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

//Create an array representing your family members
//Display its content using the print_r function
//Then, create an array describing your favourite recipes
//Display its content using the print_r
//Then, create an array listing your favourite films
//Then, using that array, display only the one film you like best using its index

<?php
$family = ['Bim', 'Bam', 'Boum' ]; 
print_r($family);

$smoothie = ['spinach', 'avocado', 'kiwi', 'kefir', 'ginger','lemon' ]; 
print_r($smoothie);

$series = ['Chicago Fire','Manifest','Queen of the South','Younger','Magnolias','Virgin River','Blacklist', 'Chasepeak Shore']
echo $series[3]

$series = ['Chicago Fire','Manifest','Queen of the South','Younger','Magnolias','Virgin River','Blacklist', 'Chasepeak Shore']
echo var_dump($series);
array_push($series, 'There for you');


$countries[] = 'England';
var_dump($countries);


$person['function'] = 'Junior Web Developer';
$person['function'] = 'Senior Web Developer';
echo $person['function'];

//<p>Coding an Associative Array</p>

$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );
    var_dump($user);
    echo $user['lastname'];

//<p>Describe yourself using an associative array: $me Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.</p>


$me = array (
    'age' => '7',
    'favorite_season' => 'Winter',
    'soccer' => false,
    
    );

$me = array(
    'age' => '7',
    'favorite_season' => 'Winter',
    'soccer' => false,
    'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')
    );
    
    echo '<pre>';
    print_r($me);
    echo '</pre>';

$me['hobbies'] = array('cooking', 'piano', 'computer');

/************************************************************************************************* */
<p><?php
$boubou = array(
    'age' => 101, 
    'favourite_season' => 'Spring', 
    'soccer' => false, 
    'hobbies' => array('gaming', 'movies','drinking');
);

$me['boubou'] = $boubou; 
echo '<pre>'; 
print_r($me); 
echo '</pre>'



?></p>

?>
</body>
</html>