<!DOCTYPE html>
<html>
<header><title>Technical Assesment</title></header>
<body>

<?php
$servername='mytestdb.co32qnak9rdd.ca-central-1.rds.amazonaws.com';
$username='rdsmaster';
$password='master123';
$dbname='testdb';
$dbport='3306';
// Create connection

$conn=mysqli_connect($servername,$username,$password,$dbname,$dbport);

// Check connection
if (!$conn)
        {
        die("Connection failed: " .  mysqli_connect_error());
        }

        $sql = "SELECT * FROM Persons";
$result = mysqli_query($conn,$sql);
//var_dump($result);


if(mysqli_num_rows($result) > 0)
{

echo "<table><tr><td>PersonID</td><td>LastName</td><td>FirstName</td><td>Address</td><td>City</td></tr>";

        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
                echo "<tr> <td>" . $row["PersonID"]. "</td><td>" . $row["LastName"] . "</td><td>" .  $row["FirstName"] . "</td><td>".$row["Address"]."</td><td>".$row["City"]."</td></tr>";
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
