<?php
$servername = "localhost";
$username = "root";
$password = "1313258";
$dbname = "DMR";

echo $_POST["fname"];
$query=$_POST["fname"];
$query="chr".$query;

echo "<br>";
echo "<p></p>";
echo "\n";

// build connection to sql server
$conn = new mysqli($servername, $username, $password, $dbname);
 
// test sql server
if ($conn->connect_error) {
    die("fail: " . $conn->connect_error);
} 
echo "connected";

echo "<br>";
echo "<p></p>";
echo "\n";

$result = mysqli_query($conn,"SELECT * FROM DMR where chr_ID='$query'");

while($row = mysqli_fetch_array($result))
{
    echo $row['start_pos'] . " " . $row['end_pos'];
    echo "<br>";
}

$conn->close(); 

?>

<!DOCTYPE html>
<html lang="en">

<div class="row center">
    <a href="index.html" >Main Page</a>
</div>

</html>