<!DOCTYPE html>
<html>
<body>
<?php
include_once "../config.php";
$conn = new mysqli($nameserver,$user,$password,$dbname) 
or die ("Connect failed: %s\n". $conn ->error);
mysqli_set_charset($conn, 'utf8mb4');  // procedural style

$name_nome = mysqli_real_escape_string($conn, $_REQUEST['name_nome']);
$name_cognome = mysqli_real_escape_string($conn, $_REQUEST['name_cognome']);
// Attempt insert query execution
$sql = "INSERT INTO Authors (name,surname) VALUES ('$name_nome', '$name_cognome')";

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