<!DOCTYPE html>
<html>
<header><title>Technical Assesment</title></header>
<body>
        <p> Hi Updated </p>
        <p> This is again updated </p>

<?php
$servername='testdb.chntrgvaknsf.ca-central-1.rds.amazonaws.com';
$username='rdsmaster';
$password='abcd1234';
$dbname='person';
$dbport='3306';
// Create connection

$conn=mysqli_connect($servername,$username,$password,$dbname,$dbport);

// Check connection
if (!$conn)
        {
        die("Connection failed: " .  mysqli_connect_error());
        }

        $sql = "SELECT * FROM info";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{

echo "<table><tr><td>PersonID</td><td>LastName</td><td>FirstName</td><td>Address</td><td>City</td></tr>";

        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
                echo "<tr> <td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>" .  $row["city"] . "</td><td>".$row["country"]."</td></tr>";
        }
        echo "</table>";
}
else
{
echo "0 results  oops NO data in table !!!!";
 }
mysqli_close($conn);

?>
</body>
</html>
