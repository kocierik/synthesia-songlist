<?php
include_once "../config.php";
$conn = new mysqli($nameserver,$user,$password,$dbname) 
or die ("Connect failed: %s\n". $conn ->error);
mysqli_set_charset($conn, 'utf8mb4');  // procedural style

 function EchoMessage($msg, $redirect)
		{
			echo '<script type="text/javascript">
			alert("' . $msg . '")
			window.location.href = "'.$redirect.'"
			</script>';
		}

$name_nome = mysqli_real_escape_string($conn, $_REQUEST['name_nome']);
$name_cognome = mysqli_real_escape_string($conn, $_REQUEST['name_cognome']);
$name_email = mysqli_real_escape_string($conn, $_REQUEST['name_email']);
$name_password = mysqli_real_escape_string($conn, $_REQUEST['name_password']);

$sql_e = "SELECT * FROM Users WHERE email='$name_email'";
$res_e = mysqli_query($conn, $sql_e);
if(mysqli_num_rows($res_e) > 0){
EchoMessage("email already taken...", index.php);
    }
   $sql= "INSERT INTO Users (nome,cognome,email,password)
        VALUES ('$name_nome','$name_cognome','$name_email','$name_password')";  
  if(mysqli_query($conn, $sql)) {       
    echo "Records added successfully.";
    header("location: /canzoni.php");
    }
    else
    {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }


mysqli_close($conn);

?>