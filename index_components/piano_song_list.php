<?PHP
$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
$conn->query('SET NAMES utf8');
$i = 0;

?><div class="piano">
    <div class="piano__stecca"></div>

    <?php
    $black_keys = 2;
    $nextlong = true;
    $query_song_list = "SELECT title, youtube FROM Songs LIMIT 10";
    $query_result = $conn->query($query_song_list);
    while ($row_result = $query_result->fetch_array()) {
        if ($black_keys > 0) {
            echo '<div class="piano__keys">
            <div class="piano__keysWhite">
            <a href="index.php?id=' . $row_result["youtube"] . '" >';
            echo $row_result["title"] . '
            </a>
            </div>       
            <div class="piano__keysBlack"></div>
            </div>';
            $black_keys--;
        } else {
            if ($nextlong == true) {
                $black_keys = 3;
                $nextlong = false;
                echo '<div class="piano__keys">
            <div class="piano__keysWhite">
            <a href="index.php?id=' . $row_result["youtube"] . '" >';
                echo $row_result["title"] . '
            </a>
            </div> 
            </div>';
            } else {
                echo '<div class="piano__keys">
            <div class="piano__keysWhite">
            <a href="index.php?id=' . $row_result["youtube"] . '" >';
                echo $row_result["title"] . '
            </a>
            </div> 
            </div>';
                $black_keys = 2;
                $nextlong = true;
            }
        }
    }
    ?>



</div>