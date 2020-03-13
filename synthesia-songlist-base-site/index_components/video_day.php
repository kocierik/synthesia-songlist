<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <div class="content__video">
        <?php
        if (!isset($_GET["id"])) {
            $sql = "SELECT youtube FROM Songs ORDER BY RAND() LIMIT 1";
            $result = $conn->query($sql);
            while ($row = $result->fetch_array()) {
                echo '<iframe class="video" src="https://www.youtube.com/embed/' . $row["youtube"] . ' "frameborder="4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"allowfullscreen></iframe>';
            }
        } else {
            $id = $_GET['id'];
            echo '<iframe class="video" src="https://www.youtube.com/embed/' . $id . '"frameborder="4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"allowfullscreen></iframe>';
        } ?>
    </div>
</body>

</html>