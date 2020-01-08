<?php include_once "./config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
header('Content-type: text/html; charset=utf-8');
$conn->query('SET NAMES utf8');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Music Learn</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleCanzoni.css">

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
        <div class="content">
            <?php
            $sql = "SELECT * FROM Songs";
            $result = $conn->query($sql);
            while ($row = $result->fetch_array()) {
                echo '<div class="song"> 
                    <div class="song__video">
                        <iframe class="video" src="http://www.youtube.com/embed/' . $row["youtube"]
                    . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="description">
                    <div class="text">
                        <span class="">';
                echo  $row["title"];
                echo ' </span>
                    </div>
                    </div>
                </div>';
            }
            $conn->close();
            ?>
        </div>

        <div class="footer">
            <div class="footer__line">
                <div class="footer__image">
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.youtube-mp3.org.in/assets/js/jquery.min.js"></script>
</body>

</html>