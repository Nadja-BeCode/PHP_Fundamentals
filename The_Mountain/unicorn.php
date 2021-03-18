<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary</title>
</head>
<body>

    <p>Are you a human, a cat or a unicorn ?</p>

    <form method="get" action="">
        <input type="radio" name="gender" value="human" id="human"/><label for="human">HUMAN</label>
        <input type="radio" name="gender" value="kitty" id="kitty"/><label for="kitty">KITTY</label>
        <input type="radio" name="gender" value="unicorn" id="unicorn"/><label for="unicorn">UNICORN</label>

	<input type="submit" name="submit" value="Click On">
</form>

   <?php
            if (isset($_GET['gender'])) {
                $animation = (($_GET['gender']) == "human") ? "<img src='https://media.giphy.com/media/8hYQgBIIHkCPjRTmai/giphy.gif' alt="human" />" :
                            (($_GET['gender']) == "kitty") ? "<img src='https://media.giphy.com/media/3oz8xuDCPjxu93ThXq/giphy.gif' alt="kitty" />" :
                            (($_GET['gender']) == "unicorn") ? "<img src='https://media.giphy.com/media/bmsCgWQEH9txC/giphy.gif' alt="unicorn" />";
            }
   ?>

</body>
</html>