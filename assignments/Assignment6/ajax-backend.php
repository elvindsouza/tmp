<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Stylesheet1.css">
    </head>
<?php
    //Connect to MySQL Server
    $connection = mysqli_connect('localhost', 'root', '');
    //Select Database
    $select_db = mysqli_select_db($connection, 'test');
    // Retrieve data from Query String
    $age = $_GET['age'];
    $wpm = $_GET['wpm'];
    //build query
    $query = "SELECT * FROM Employee WHERE ";
    if(is_numeric($age))
        $query .= "age <= $age";
    if(is_numeric($wpm))
        $query .= " AND salary <= $wpm";
    //Execute query
    $qry_result = mysqli_query($connection,$query) or die(mysql_error());
    //Build Result String
    $display_string = "<table border='2' width='90%' align='center' bgcolor='cyan'>";
    $display_string.="<tr align='center'><td colspan=4>Output for Employee Table</td></tr>";
    $display_string .= "<tr bgcolor='pink'>";
    $display_string .= "<th>Name</th>";
    $display_string .= "<th>Age</th>";
    $display_string .= "<th>Sex</th>";
    $display_string .= "<th>Salary</th>";
    $display_string .= "</tr>";
    // Insert a new row in the table for each person returned
    while($row = mysqli_fetch_array($qry_result)){
        $display_string .= "<tr align='center'>";
        $display_string .= "<td>$row[name]</td>";
        $display_string .= "<td>$row[age]</td>";
        $display_string .= "<td>$row[sex]</td>";
        $display_string .= "<td>$row[salary]</td>";
        $display_string .= "</tr>";
    }
    $display_string .= "</table>";
    echo $display_string;
?>
</html>
