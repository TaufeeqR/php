<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP_variable_functions_challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    

<?php

$name = "  Bob  ";

$age = "thirty five";

$job = "plumber";

$carMake = "Toyota";

$carColour = "RED";

$happy = "true";

$time = "this many";

$break = "<br>";  

//-------------------------Function--------------------//

// Use trim function to remove spaces from name.

$name = trim($name,' ');

echo $name.$break;

//---Use str_replace to replace words to number.--//

// Variable first, replacement value, recall the value //
$age = str_replace('thirty five', '35', $age);

echo $age.$break;

//--Remove capslock--//

$carColour = strtolower($carColour);

echo $carColour.$break;

//--Use strlen to change time to numbers--/

$time = strlen($time);

echo $time.$break;

//car make and colour combine//

$car = $carColour.$carMake;

echo $car.$break;

//Work out years of retirement using math function//

$retirement = ('65' - $age);

echo $retirement.$break;

$story = ($name.' is a'.' '.$job. '. He drives a'.' '.$car.' and works'.' '.$time.' hours a day.'.' He is'.' '.$age.''.' years old and is'.' '.$retirement.' '.'years from retirement.'.' '.'He is happy with his life.');

echo $story.$break;
?>



</body>
</html>