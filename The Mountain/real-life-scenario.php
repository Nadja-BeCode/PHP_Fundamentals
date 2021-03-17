<?php

$fullname = $_GET['fullname'];

if ( strlen($fullname) == 0 ){
  echo "Ahem. You forgot to enter your name.";
  exit; // strlen it's for the length of the word
}

/*********************OTHER WAY****************************** */

$fullname = $_GET['fullname'];

if (filter_var($fullname) == 0 ){
  echo "Ahem. You forgot to enter your name.";
  exit; // The filter_var() function filters a variable with the specified filter.
}


//Try to guess what the function strlen() does... Then look in the PHP manual. to see if you got it right.
/*empty()
filter_var()*/

?>