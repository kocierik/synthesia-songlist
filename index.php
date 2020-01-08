<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "/home/erik/projects/synthesia-songlist/config.php";

$conn = new mysqli($nameserver, $user, $password, $dbname)
  or die("Connect failed: %s\n" . $conn->error);
header('Content-type: text/html; charset=utf-8');
$conn->query('SET NAMES utf8');

$query_random_youtube = "SELECT youtube FROM Songs ORDER BY RAND() LIMIT 1";
$result_random_youtube = $conn->query($query_random_youtube);
$result_row = $result_random_youtube->fetch_array();
$random_id_youtube = $result_row["youtube"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Music Learn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <link rel="stylesheet" href="css/styleIndex.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
  <div class="page">
    <div class="header">
      <div class="title--">
        <h4 class="text-shadow">
          <em>Music Learn 🎼</em>
        </h4>
      </div>
      <?php require_once "index_components/form_register.php"; ?>
    </div>
  </div>
  <?php require_once "index_components/form_login.php"; ?>
  </div>
  </div>
  <div class="container">
    <div class="sidebar">
      <?php require_once "index_components/piano_song_list.php"; ?>
    </div>
    <div class="content">
      <p class="content__text">Canzone del giorno</p>
      <?php require_once "index_components/video_day.php"; ?>
    </div>
  </div>
  <div class="footer">
    <div class="footer__line">
      <div class="footer__image">
      </div>
    </div>
  </div>

  </div>
</body>

</html>