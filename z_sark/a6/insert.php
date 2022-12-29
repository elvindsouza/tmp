<?php
require('connect.php');
if (
    isset($_POST['name']) and
    isset($_POST['age']) and
    isset($_POST['email']) and
    isset($_POST['phone']) and
    isset($_POST['category']) and
    isset($_POST['country'])
) {
    //Assigning posted values to variables.
    $ename = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $country = $_POST['country'];
    //3.1.2 Checking the values are existing in the database or not
    $query = "insert into conferenceRegistration(participantName,age,emailId,mobileNo, categoryOfParticipant,country)" .
        "values('" . $ename . "','" . $age . "','" . $email . "','" . $phone . "','" . $category . "','" . $country . "')";
    $retvalue = mysqli_query($connection, $query);
    if (!$retvalue) {
?>
        <script type="text/javascript">
            alert('error occured while inserting your data');
        </script>
    <?php
    }
    ?>
    <script type="text/javascript">
        alert('Data Inserted Successfully ');
        window.location.href = 'main.php';
    </script>
<?php
}
?>
