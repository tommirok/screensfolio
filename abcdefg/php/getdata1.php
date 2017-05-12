<?php
$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "pena420";
$dbname = "portfolioUsers";
$palautus =array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM images where id>=1 AND id<5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $palautus+=array($row["ID"]=>array("url"=>$row["url"],"otsikko"=>$row["otsikko"]) );
        //echo "id: " . $row["ID"]. " - url: " . $row["url"]. " " . $row["otsikko"]. "<br>";
    }
} else {
    echo "0 results";
}
$palautus=json_encode($palautus);
echo $palautus;

$conn->close();
?>