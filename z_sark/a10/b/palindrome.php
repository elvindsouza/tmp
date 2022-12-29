<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    $sum = 0;
    while (floor($number)) {
        $rem = $number % 10;
        $sum = $sum * 10 + $rem;
        $number = $number / 10;
    }
    if ($sum == $_GET['number']) {
        echo "<script>alert('number is a palindrome')</script>";
    }
    else {
        echo "<script>alert('number is NOT a palindrome')</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>SUM OF DIGITS</title>
</head>

<body>
    <form method="GET">
        <input type="text" name="number" placeholder="Enter a number" autofocus>
    </form>
</body>

</html>