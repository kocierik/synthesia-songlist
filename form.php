<?php include_once "./config.php";
$conn = new mysqli($nameserver,$user,$password,$dbname) 
or die ("Connect failed: %s\n". $conn ->error);
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
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap"rel="stylesheet"/>
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
        <form action="http://localhost/php/insertsong.php" method="POST">
          <div class="rowtitle">
              <span>Aggiungi canzone</span>
            </div>
          <div class="row">   
            <div class="row__label">
              <span> Autore</span>
            </div>
            <div class="row__input">
              <select name="name_author" class="select" required>
              <?php
              $sql = "SELECT * FROM Authors";
              $result = $conn->query($sql); 
              while($row =$result->fetch_array()){  
                echo'
                 <option value="' . $row["id"] . '"> '. $row["name"] . " " . $row["surname"] . ' </option> ';
              }
              ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="row__label">
              <span> Titolo</span>
            </div>
            <div class="row__input">
              <input type="text" name="name_title" id="id_title" required placeholder="Inserisci il titolo" />
            </div>
          </div>
            <div class="row">
            <div class="row__label">
              <span> Youtube</span>
            </div>
            <div class="row__input">
              <input type="text" name="name_youtube" id="id_youtube" required placeholder="Inserisci il link youtube" />
            </div>
          </div>
          <div class="row">
            <input class="submit" type="submit" value="Submit" />
          </div>
          </form>
      </div>
      <div class="content2">
        <form action="http://localhost/php/insertauthor.php" method="POST">
           <div class="rowtitle">
              <span>Aggiungi autore</span>
            </div>
          <div class="row">
            <div class="row__label">
              <span> Nome</span>  
            </div>
            <div class="row__input">
              <input type="text" name="name_nome" required placeholder="Inserisci il nome" />
            </div>
          </div>
            <div class="row">
            <div class="row__label">
              <span> Cognome</span>
            </div>
            <div class="row__input">
              <input type="text" name="name_cognome" placeholder="Inserisci il cognome" />
            </div>
          </div>
          <div class="row">
            <input class="submit" type="submit" value="Submit" />
          </div>
          </form>
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
