<?php
require('connect.php');
if (
    isset($_POST['id']) and isset($_POST['name']) and isset($_POST['des']) and
    isset($_POST['sal'])
) {
    $eid = $_POST['id'];
    $ename = $_POST['name'];
    $designation = $_POST['des'];
    $salary = $_POST['sal'];
    $query = "insert into data values(" . $eid . ",'" . $ename . "','" . $designation . "'," . $salary . ")";
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