<html>

<head>
    <title>Create Employee</title>
    <link rel="stylesheet" href="Stylesheet1.css" type="text/css" />
</head>

<body>
    <form action="updatedata.php" method="POST">
        <table bgcolor="Pink" border="2" width="60%" align="center" valign="middle">
            <tr align="center">
                <td valign="bottom">
                    <h1>Update Participant Information</h1>
                </td>
            </tr>
        </table>
        <table bgcolor="SkyBlue" border="2" width="60%" align="center" celpadding="15px">
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp PREVIOUS Participant Name:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" value="<?php echo (isset($_GET['edit_id'])) ? $_GET['edit_id'] : ''; ?>" name="edit_id" readonly="true" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant Name:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant Age:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="3" name="age" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant e-mail address:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="30" name="email" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant phone number:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="30" name="phone" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Select Category:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <select name="category">
                        <option>student</option>
                        <option>faculty members</option>
                        <option>professional</option>
                        <option>company/firm representative</option>
                    </select></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant Country of Origin:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="30" name="country" /></td>
            </tr>
            <tr align="center">
                <td><input type="submit" value="Update" name="update" class="ab"></td>
                <td><input type="submit" value="Cancel" name="cancel" class="ab"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

require('connect.php');

if (isset($_POST['update'])) {
    $ename = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $country = $_POST['country'];
    $id = $_POST['edit_id'];
    $sql_query = "UPDATE conferenceRegistration SET participantName='" . $ename . "',age=" . $age . ",emailId='" . $email . "',mobileNo='" . $phone . "', categoryOfParticipant ='" . $category . "', country ='" . $country . "' WHERE participantName='" . $id . "'";

    $query = "insert into conferenceRegistration(participantName,age,emailId,mobileNo, categoryOfParticipant,country)" .
        "values('" . $ename . "','" . $age . "','" . $email . "','" . $phone . "','" . $category . "','" . $country . "')";
    if (mysqli_query($connection, $sql_query)) {
?>
        <script type="text/javascript">
            alert('Data Are Updated Successfully');
            window.location.href = 'main.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Error occured while updating data');
        </script>
<?php
    }
}
if (isset($_POST['cancel'])) {
    header("Location: main.php");
}
?>
