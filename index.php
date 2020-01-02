<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "./config.php";

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
  <div class="header">
    <div class="title--">
      <h4 class="text-shadow">
        <em>Music Learn 🎼</em>
      </h4>
    </div>
    <div class="button signin">
      <a href="#popup2"> <input class="addclick signin" type="button" value="Sign in" /></a>
      <div id="popup2" class="overlay">
        <div class="popup">
          <a class="close" href="#">&times;</a>
          <form action="/php/register.php" method="POST">
            <div class="rowtitle">
              <h2>Sign in</h2>
            </div>
            <div class="row">
              <div class="row__label">
                <span> Nome:</span>
              </div>
              <div class="row__input">
                <input type="text" name="name_nome" required placeholder="Inserisci il nome" />
              </div>
            </div>
            <div class="row">
              <div class="row__label">
                <span> Cognome:</span>
              </div>
              <div class="row__input">
                <input type="text" name="name_cognome" required placeholder="Inserisci il cognome" />
              </div>
            </div>
            <div class="row">
              <div class="row__label">
                <span> Email:</span>
              </div>
              <div class="row__input">
                <input type="email" name="name_email" required placeholder="Inserisci la email" />
              </div>
            </div>
            <div class="row">
              <div class="row__label">
                <span> Password:</span>
              </div>
              <div class="row__input">
                <input type="password" name="name_password" required placeholder="Inserisci la password" />
              </div>
            </div>
            <div class="row">
              <input class="submit" type="submit" value="Submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="button login">
      <a href="#popup1"> <input class="addclick login" type="button" value="Login" /></a>
      <div id="popup1" class="overlay">
        <div class="popup">
          <a class="close" href="#">&times;</a>
          <form action="/php/login.php" method="POST">
            <div class="rowtitle">
              <h2>Login</h2>
            </div>
            <div class="row">
              <div class="row__label">
                <span> Email:</span>
              </div>
              <div class="row__input">
                <input type="text" name="name_email" required placeholder="Indirizzo e-mail" />
              </div>
            </div>
            <div class="row">
              <div class="row__label">
                <span> Password:</span>
              </div>
              <div class="row__input">
                <input type="password" name="name_password" required placeholder="Inserisci la password" />
              </div>
            </div>
            <div class="row">
              <input class="submit" type="submit" value="Submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="sidebar">
      <div class="piano">
        <div class="piano__stecca"></div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 0";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>
          <div class="piano__keysBlack"></div>
        </div>
        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 1";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>
          <div class="piano__keysBlack"></div>
        </div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 2";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>

        </div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 3";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>
          <div class="piano__keysBlack"></div>
        </div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 4";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>
          <div class="piano__keysBlack"></div>
        </div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 5";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>
          <div class="piano__keysBlack"></div>
        </div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 6";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>
        </div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 7";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>
          <div class="piano__keysBlack"></div>
        </div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 8";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>
          <div class="piano__keysBlack"></div>
        </div>

        <div class="piano__keys">
          <div class="piano__keysWhite"> <?php
                                          $sql = "SELECT id, MAX(id), title,youtube FROM Songs GROUP BY id DESC LIMIT 1 OFFSET 9";
                                          $result = $conn->query($sql);
                                          while ($row = $result->fetch_array()) {
                                            echo '<a href="index.php?id=' . $row["youtube"] . '" >';
                                            echo  $row["title"];
                                          } ?> </a></div>

        </div>
      </div>

    </div>
    <div class="content">
      <p class="content__text">Canzone del giorno</p>
      <div class="content__video">
        <?php
        if (isset($id)) {
          $sql = "SELECT youtube FROM Songs ORDER BY RAND() LIMIT 1";
          $result = $conn->query($sql);
          while ($row = $result->fetch_array()) {
            echo '<iframe class="video" src="https://www.youtube.com/embed/' . $row["youtube"] . ' "
                frameborder="4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>';
          }
        } else {
          $id = $_GET['id'];
          echo '<iframe class="video" src="https://www.youtube.com/embed/' . $id . '"
                frameborder="4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>';
        } ?>

      </div>

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