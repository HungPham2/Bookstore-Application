<?php

require_once('mysqli_connect.php');
$query = "SELECT custID, custFirstName, custLastName, address, city, state, custEmail, custPhone FROM Customers";

$response = @mysqli_query($dbc,$query);

if($response){
    echo '<table border="black">
    <tr> <td align = "left"> <b> Username </b> </td>
        <td align = "left"> <b> First Name </b> </td>
	<td align = "left"> <b> Middle Name </b> </td>
        <td align = "left"> <b> Last Name </b> </td>
        <td align = "left"> <b> Customer Address </b> </td>
        <td align = "left"> <b> City </b> </td>
        <td align = "left"> <b> State </b> </td>
	<td align = "left"> <b> Zip Code </b> </td>
        <td align = "left"> <b> Customer Email </b> </td>
        <td align = "left"> <b> Customer Phone </b> </td>
    </tr>';
    
    while($row = mysqli_fetch_array($response)){
        echo'<tr> <td align = "left">' . $row['username'] . '</td>'
        .'<td align = "left">' . $row['firstname'] . '</td>'
	.'<td align = "left">' . $row['middlename'] . '</td>'
        .'<td align = "left">' . $row['lastname'] . '</td>'
        .'<td align = "left">' . $row['address'] . '</td>'
        .'<td align = "left">' . $row['city'] . '</td>'
        .'<td align = "left">' . $row['state'] . '</td>'
	.'<td align = "left">' . $row['zipcode'] . '</td>'
        .'<td align = "left">' . $row['custEmail'] . '</td>'
        .'<td align = "left">' . $row['custPhone'] . '</td>';  
        echo '</tr>';
    }
    echo '</table>';
}else{
    echo "Could not issue database query";
    echo mysqli_error($dbc);       
}
mysqli_close($dbc);
?>
