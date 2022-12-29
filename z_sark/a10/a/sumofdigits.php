<?php
if (isset($_GET['number'])){
    $sum = 0;
    for ($i = 0; $i < strlen($_GET['number']); $i++) {
        $sum += $_GET['number'][$i];
    }
    echo "<script>alert(" . $sum . ")</script>";
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
    