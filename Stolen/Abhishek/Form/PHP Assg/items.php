<?php

$itemcode = $_POST[‘itemcode’];
$itemname = $_POST[‘itemname’];
$unitssold = $_POST[‘unitssold’];
$rate = $_POST[‘rate’];
$i_code = explode(‘,’,$itemcode);
$i_name = explode(‘,’,$itemname);
$i_unit = explode(‘,’,$unitssold);
$i_rate = explode(‘,’,$rate);
$z=count($i_code);
$t_amt=0;

for($i=0;$i<$z;$i++)

{

$t_amt = $t_amt+$i_rate[$i];

}

echo “<table align=center border=1>”;

echo “<tr><td> <b>Item Code</b> </td><td> <b>Item Name</b>
</td><td><b> Units Sold</b> </td><td> <b>Rate </b></td></tr>”;

for($i=0;$i<$z;$i++)

{

echo “<tr><td>”.$i_code[$i].”</td><td>”.$i_name[$i].”</td>
<td>”.$i_unit[$i].”</td><td>”.$i_rate[$i].”</td></tr>”;

}

echo “<tr><th colspan=3>Total amount </th><td>”.$t_amt.”</td></tr>”;

echo “</table>”;

?>