<html>

<body>

    <form action="a_sum_of_digits.php" method="POST">
        <input type="text" maxlength="30" name="input" />
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="Cancel" name="cancel">
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $num = $_POST['input'];

    $sum = 0;
    $rem = 0;
    for ($i = 0; $i <= strlen($num); $i++) {
        $rem = $num % 10;
        $sum = $sum + $rem;
        $num = $num / 10;
    }
    echo "Sum of digits is $sum";
}
