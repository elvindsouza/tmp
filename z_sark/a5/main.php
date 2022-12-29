<?php
require('connect.php');
if (isset($_GET['delete_id'])) {
    $sql_query = "DELETE FROM `data` WHERE `empid`='" . $_GET['delete_id'] . "'";
    mysqli_query($connection, $sql_query);
    header("Location: $_SERVER[PHP_SELF]");
}
?>
<html>

<head>
    <title>Employee DB</title>
    <link rel="stylesheet" href="stylesheet1.css" type="text/css" />
    <link href='https://code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet' />
    <link href="https://fonts.googleapis.com/css?family=Fira%20Code" rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function edit_id(id) {
            if (confirm('Sure to edit ?')) {
                window.location.href = 'updatedata.php?edit_id=' + id;
            }
        }
        function delete_id(id) {
            if (confirm('Sure to Delete ?')) {
                window.location.href = 'main.php?delete_id=' + id;
            }
        }
    </script>
</head>

<body>
    <table bgcolor="orange" border="2" width="60%" align="center" valign="middle">
        <tr>
            <td colspan="3">
                <marquee><a href="createdata.php">Create Data</a></marquee>
            </td>
        </tr>
    </table>
    <table bgcolor="red" border="2" width="60%" align="center" celpadding="15px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
        $sql_query = "SELECT * FROM `data`";
        $result_set = mysqli_query($connection, $sql_query);
        if (mysqli_num_rows($result_set) > 0) {
            while ($row = mysqli_fetch_row($result_set)) {
        ?>
        <tr>
            <td>
                <?php echo $row[0]; ?>
            </td>
            <td>
                <?php echo $row[1]; ?>
            </td>
            <td>
                <?php echo $row[2]; ?>
            </td>
            <td>
                <?php echo $row[3]; ?>
            </td>
            <td align="center"><a class="fa fa-pencil" href="javascript:edit_id('<?php echo $row[0]; ?>')"></a></td>
            <td align="center"><a class="fa fa-trash-o" href="javascript:delete_id('<?php echo $row[0]; ?>')"></a></td>
        </tr>
        <?php
            }
        } else {
        ?>
        <tr>
            <td colspan="5">No Data Found !</td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>