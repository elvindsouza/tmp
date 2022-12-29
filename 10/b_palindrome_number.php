<html>

<body>

    <form action="b_palindrome_number.php" method="POST">
        <input type="text" maxlength="30" name="input" />
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="Cancel" name="cancel">
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $input = $_POST['input'];

    function palindrome($n)
    {
        $number = $n;
        $sum = 0;
        while (floor($number)) {
            $rem = $number % 10;
            $sum = $sum * 10 + $rem;
            $number = $number / 10;
        }
        return $sum;
    }
    $num = palindrome($input);
    if ($input == $num) {
        echo "$input is a Palindrome number";
    } else {
        echo "$input is not a Palindrome";
    }
}
