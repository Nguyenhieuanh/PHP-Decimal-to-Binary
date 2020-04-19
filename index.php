<?php
include_once "Classes/Stack.php";

function decimalToBinary($number)
{
    $stack = new Stack(100);
    while ($number != 0) {
        $stack->push($number % 2);
        $number = floor($number / 2);
    }

    while (!($stack->isEmpty())) {
        echo $stack->pop() . ' ';
    }
}

$number = 10;

echo "Binary of $number is: [";
decimalToBinary($number);
echo ']';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Chuyển đổi từ hệ thập phân sang hệ nhị phân</title>
</head>
<body>

</body>
</html>
