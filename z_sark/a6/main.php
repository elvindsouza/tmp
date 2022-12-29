<?php
require('connect.php');
// delete condition
if (isset($_GET['delete_id'])) {
    $sql_query = "DELETE FROM conferenceregistration WHERE participantName='" . $_GET['delete_id'] . "'";
    mysqli_query($connection, $sql_query);
    header("Location: $_SERVER[PHP_SELF]");
} // delete condition
?>
<html>

<head>
    <title>Simple CRUD Operations With PHP and MySql - By Coding Cage</title>
    <link rel="stylesheet" href="stylesheet1.css" type="text/css" />
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
    <table bgcolor="Pink" border="2" width="60%" align="center" valign="middle">
        <tr align="center">
            <td valign="bottom">
                <h1>Online Conference Registration</h1>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <marquee><a href="createdata.php">Create
                        Data</a></marquee>
            </td>
        </tr>
    </table>
    <table bgcolor="SkyBlue" border="2" width="60%" align="center" celpadding="15px">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>e-mail</th>
            <th>mobile</th>
            <th>category</th>
            <th>country</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
        $sql_query = "SELECT * FROM conferenceRegistration";
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
            <td>
                <?php echo $row[4]; ?>
            </td>
            <td>
                <?php echo $row[5]; ?>
            </td>
            <td align="center"><a class="fa fa-pencil" href="javascript:edit_id('<?php echo $row[0]; ?>')"></a></td>
            <td align="center"><a class="fa fa-trash-o" href="javascript:delete_id('<?php echo $row[0]; ?>')"></a></td>
        </tr>
        <?php
            }
        } else {
        ?>
        <tr>
            <td colspan="7">No Data Found !</td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
