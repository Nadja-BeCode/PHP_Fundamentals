
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<p>***********1.1 Nettoyez votre chambre Exercice
<?php
$room_is_filthy = false;
if ($room_is_filthy = false) { echo  "Yuk, la pièce est sale: nettoyons-la
	 !" ;
	echo  "<br> La chambre est maintenant propre!" ;
	$room_is_filthy = true;
} else {
	 echo  "<br> Rien à faire, la chambre est soignée." ;
}
?></p>

<p>************1.2 Clean your room Exercise, improved</p>
<?php
$possible_states = array("health hazard", "dirty", "filthy", "clean", "immaculate");
    $room_filthiness = $possible_states[4];

    if($possible_states[0]){
        echo "Yuk, Room is Disgusting! Let's clean it up !";
    } else if($possible_states[1]){
        echo "Yuk, Room is dirty : let's clean it up !";
    } else if($possible_states[2]){
        echo "Yuk, Room is filthy : let's clean it up !";
    } else if($possible_states[3]){
        echo "Ok, Room is clean : You did a good job !";
    } else {
        echo "<br>Nothing to do, room is neat.";
    }
?></p>

<p>***********2."Different greetings according to time"</p>
    <?php
date_default_timezone_set('Europe/Amsterdam');
$now = date("G:i");
echo $now;

if($now >= '05:00' && $now <= '09:00') {
    echo " Good morning !";
} elseif ($now > '09:00' && $now <= '12:00') {
    echo " Good day !";
} elseif ($now > '12:00' && $now <= '16:00') {
    echo " Good afternoon";
} elseif ($now > '16:00' && $now <= '21:00') {
    echo " Good evening !";
} elseif ($now > '21:00' && $now <= '04:00') {
    echo " Good night !";
}
    ?>
<p>***********3. "Different greetings according to age"</p>

    <?php
if (isset($_GET['age'])){

    if ($_GET['age'] < 12){
        echo 'Hello kiddo !';
    }elseif ($_GET['age'] > 12 && $_GET['age'] < 18) {
        echo 'Hello Teenager !';
    }elseif ($_GET['age'] > 18 && $_GET['age'] < 115) {
        echo 'Hello Adult !';
    } elseif ($_GET['age'] > 115) {
        echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you?'; 
    }
}

?>
<p>**************4. Display a different greeting according to the user's age and gender.</p>

<?php
if (isset($_GET['age']) && isset($_GET['gender'])){

    if ($_GET['age'] < 12){
        if ($_GET['gender'] == 'woman') {
            echo 'Hello kiddo !';
        }elseif ($_GET['gender'] == 'man') {
            echo 'Hello kiddo !';
        }
    
    }elseif ($_GET['age'] > 12 && $_GET['gender'] < 18){
        if ($_GET['gender'] == 'woman') {
            echo 'Hello Teenager !';
        }elseif ($_GET['gender'] == 'man') {
            echo 'Hello Teenager !';
        }

    }elseif ($_GET['age'] > 18 && $_GET['gender'] < 115) {
        if ($_GET['gender'] == 'woman') {
            echo 'Hello Adult !';
        }elseif ($_GET['gender'] == 'man') {
            echo 'Hello Adult !';
        }

    } elseif ($_GET['age'] > 115) {
        if ($_GET['gender'] == 'woman') {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you?';
        }elseif ($_GET['gender'] == 'man') {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you?';
        }
    }
}

?>

<form method="get" action="">

WOMAN OR MAN ?

<input type="radio" name="gender" value="man" id="man"/> <label for="man">MAN</label>
<input type="radio" name="gender" value="woman" id="woman"/> <label for="woman">WOMAN</label>

	<input type="submit" name="submit" value="Greet me now">
</form>

<p>**************5. Display a different greeting according to the user's age, gender and mothertongue.</p>
<?php

$boy_or_girl ='';

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english']){

    if (($_GET['age'] < 12) && $_GET['english'] == 'yes'){
        echo 'Hello boy_or_girl!';
    }else{
        echo 'Aloha $boy_or_girl';
    }
}
?>

<form method="get" action="">

DO YOU SPEAK ENGLISH ?

<input type="radio" name="gender" value="man" id="man" /> <label for="man">MAN</label>
<input type="radio" name="gender" value="woman" id="woman"/> <label for="woman">WOMAN</label>

	<input type="submit" name="submit" value="Greet me now">
</form>

<?php

<p>**************6. The Girl Soccer team</p>

$welcome = 'Welcome to the team';
$dontfit = 'Sorry you don\'t fit the criteria'; 


if (isset($_GET['gender']) && isset($_GET['age']) {
    if ($_GET['age'] >= 21 && $_GET['age'] <= 40) {
        echo $welcome;
    }else{
        echo $dontfit;
}
?>

<form method="get" action="">


<input type="radio" name="age" value="man" id="man" /> <label for="man">MAN</label>
<input type="radio" name="gender" value="woman" id="woman"/> <label for="woman">WOMAN</label>

	<input type="submit" name="submit" value="Greet me now">
</form>

<p>**************7. Achieve the same, without the ELSE.</p>

<?php
$welcome = 'Welcome to the team';

if (isset($_GET['gender']) && isset($_GET['age']) {
    if ($_GET['age'] >= 21 && $_GET['age'] <= 40) {
        echo $welcome;
    }
}
?>

<p>**************8. "School sucks!" Exercise</p>

<?php

if (isset($_GET['note'])) {

    if (($_GET['note']) < 4) {
        echo 'This work is really bad. What a dumb kid!'
    }elseif(($_GET['note']) > 5 && ($_GET['note']) <=9){
        echo 'This is not sufficient.,More studying is required.'
    }elseif(($_GET['note']) == 10){
        echo 'barely enough!'
    }elseif(($_GET['note']) > 11 && ($_GET['note']) <= 14){
        echo 'Not bad!'
    }elseif(($_GET['note']) > 15 && ($_GET['note']) <= 18){
        echo 'bravo, bravissimo'
    }else(($_GET['note']) > 19 || ($_GET['note']) <= 20){
        echo 'Too good to be true: confront the cheater!'
}

?>

<p>**************9. The "Switch" structure.</p>
<?php
if (isset($_GET['note'])){

    switch ($_GET['note']) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "This work is really bad. What a dumb kid!";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            echo "This is not sufficient.,More studying is required.";
            break;
        case 10:
            echo "barely enough!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            echo "Not bad!";
            break; 
        case 15:
        case 16:
        case 17:
        case 18:
            echo "bravo, bravissimo";
            break;
        case 19:
        case 20:
            echo "Too good to be true: confront the cheater!";
            break;
    }
}
?>

<p>**************10. Ternary operators</p>
<p>**************11. Ternary exercises</p>   


Real-life scenario : form field validation
$fullname = $_GET['fullname'];

if ( strlen($fullname) == 0 ){
  echo "Ahem. You forgot to enter your name.";
  exit;
}


</body>
</html>