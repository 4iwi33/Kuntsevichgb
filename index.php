<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kuntsevichgb</title>
</head>

<body>
    <?php
    // include 'config.php';
    include 'connect.php';
    include 'function.php';
    // $pagecount = ceil($count / $pagesize);

    // $currinentpage = $_GET['page'] ?? 1;

    // $startrow = ($currinentpage - 1) = $pagesize;

    // $pageination = "<div class='pageination'>";

    // for ($i = 1; $i <= $pagecount; $i++) {
    //     $pageination .= "</div>";
    // }
    // $pageination .= "<a href=?page=$i'>$i</a>";

    $result = $mysqli->query('SELECT * FROM tablegb');

    // echo $pageination;

    while ($row = $result->fetch_object()) {
        echo "<b>" . smile($row->text) . "</b> <i>$row->name</i><br>\n";
    }
    // echo $pageination;


    $mysqli->close();
    ?>
    <form action="add.php" method="post">
        <textarea name="text" cols="30" rows="10"></textarea><br>
        <input type="text" name="name"><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>