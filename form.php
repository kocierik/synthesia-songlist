<?php include_once "./config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
  or die("Connect failed: %s\n" . $conn->error);
header('Content-type: text/html; charset=utf-8');
$conn->query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet" />
  <title>Music Learn</title>
  <link rel="stylesheet" href="css/styleForm.css" />

</head>

<body>
  <div class="page">
    <div class="header">
      <div class="title">
        <h3>
          <em>Music Learn 🎼</em>
        </h3>
      </div>
    </div>

    <div class="container">
      <div class="content1">
        <?php require_once "./form_components/add_song.php" ?>
      </div>
      <div class="content2">
        <?php require_once "./form_components/add_author.php" ?>
      </div>
    </div>
    <div class="footer">
      <div class="footer__line">
        <div class="footer__image">
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>