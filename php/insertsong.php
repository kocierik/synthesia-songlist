<!DOCTYPE html>
<html>
<body>
<?php
include_once "../config.php";
$conn = new mysqli($nameserver,$user,$password,$dbname) 
or die ("Connect failed: %s\n". $conn ->error);
mysqli_set_charset($conn, 'utf8mb4');  // procedural style
/*$sql = "SELECT * FROM Songs";
$result = $conn->query($sql);
while($row = $result->fetch_array()){
    echo "- Id: " . $row["id"]. "<br>" . "- Title: " . $row["title"]
    . "<br>". "- Author: " . $row["author"]. "<br>". "- youtube: " . $row["author"];
}
$conn-> close();
*/
$name_title = mysqli_real_escape_string($conn, $_REQUEST['name_title']);
$name_youtube = mysqli_real_escape_string($conn, $_REQUEST['name_youtube']);
$id_author = mysqli_real_escape_string($conn, $_REQUEST['name_author']);
htmlspecialchars_decode($name_title);
// Attempt insert query execution
$sql = "INSERT INTO Songs (title,youtube,author) VALUES ('$name_title', '$name_youtube','$id_author')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>

</body>
</html>