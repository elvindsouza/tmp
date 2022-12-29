<?php
require('connect.php');
if (
    isset($_POST['name']) and isset($_POST['age']) and isset($_POST['sex']) and
    isset($_POST['sal'])
) {
    //Assigning posted values to variables.
    $ename = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $salary = $_POST['sal'];
    //3.1.2 Checking the values are existing in the database or not
    $query = "insert into employee(name,age,sex,salary)" .
        "values('" . $ename . "'," . $age . ",'" . $sex . "'," . $salary . ")";
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