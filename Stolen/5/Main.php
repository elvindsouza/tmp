<?php
require('connect.php');
// delete condition
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM employee WHERE name='".$_GET['delete_id']."'";
	mysqli_query($connection,$sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<html>
    <head>
        <title>Simple CRUD Operations With PHP and MySql - By Coding Cage</title>
        <link rel="stylesheet" href="Stylesheet1.css" type="text/css" />
        <script type="text/javascript">
            function edt_id(id)
            {
	               if(confirm('Sure to edit ?'))
	               {
		              window.location.href='Update_data.php?edit_id='+id;
	               }
            }
            function delete_id(id)
            {
	               if(confirm('Sure to Delete ?'))
	               {
		              window.location.href='Main.php?delete_id='+id;
	               }
            }
        </script>
    </head>
    <body>
        
	   <table bgcolor="Pink" border="2" width="60%" align="center" valign="middle">
	       <tr align="center"><td valign="bottom"><h1>CRUD Operations on Employee Database</h1></td></tr>
           <tr><td colspan="3"><marquee><a href="CreateData.html">Create Data</a></marquee></td></tr>
	   </table>
	   <table bgcolor="SkyBlue" border="2" width="60%" align="center" celpadding="15px">
            <tr>
                <th>Name </th>
                <th>Age</th>
                <th>City Name</th>
                <th>Salary</th>
                <th colspan="2">Operations</th>
            </tr>
            <?php
	           $sql_query="SELECT * FROM employee";
	           $result_set=mysqli_query($connection,$sql_query);
	           if(mysqli_num_rows($result_set)>0)
	           {
                    while($row=mysqli_fetch_row($result_set))
                    {
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
                <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
            </tr>
            <?php
                    }
	           }
	           else
	           {
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