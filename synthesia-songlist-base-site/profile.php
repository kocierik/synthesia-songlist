<?php include_once "./config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
  or die("Connect failed: %s\n" . $conn->error);
header('Content-type: text/html; charset=utf-8');
$conn->query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <title>Music Learn</title>
  <link rel="stylesheet" href="css/styleprofile.css">

</head>

<body link="white" alink="white" vlink="white">
  <div class="container">
    <div class="header">
      <div class="title">
        <h1 class="title--">
          <em>Music Learn 🎼</em>
        </h1>
      </div>

      <div class="addsong">
        <a href="form.php">
          <input class="addclick" type="button" value="Aggiungi canzone" /></a>
      </div>
      <div class="cnt-myprofile">
        <a href="profile.php">
          <div class="myprofile">
            <i class="glyphicon glyphicon-user"></i>
          </div>
        </a>
      </div>
    </div>
</body>

</html>