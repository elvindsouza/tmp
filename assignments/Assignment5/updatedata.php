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
                    <h1>Update Data Form</h1>
                </td>
            </tr>
        </table>
        <table bgcolor="SkyBlue" border="2" width="60%" align="center" celpadding="15px">
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp PREVIOUS Employee Name:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" value="<?php echo (isset($_GET['edit_id'])) ? $_GET['edit_id'] : ''; ?>"
                        name="edit_id" readonly="true" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Employee Name:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Employee Age:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="3" name="age" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Select Genderr:</td>
                <td>&nbsp&nbsp&nbsp&nbsp
                    <select name="sex">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Employee Salary:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="6" name="sal" /></td>
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
    $sex = $_POST['sex'];
    $salary = $_POST['sal'];
    $id = $_POST['edit_id'];
    $sql_query = "UPDATE employee SET name='" . $ename . "',age=" . $age . ",sex='" . $sex . "',salary=" . $salary . " WHERE name='" . $id . "'";
    if (mysqli_query($connection, $sql_query)) {
?>
        <script type="text/javascript">
            alert('Data Are Updated Successfully');
            window.location.href = 'main.php';
        </script>
<?php
        }
    else {
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