<?php include 'database.php'; 

//* Create select query
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shoutbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div id="container">
        <header>
            <h1>JS Shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li><?= $row['name']; ?> : <?= $row['shout']?> [<?= $row['date'] ?>] </li> 
                <?php endwhile; ?>
            </ul>
        </div>
        <footer>
            <form action="">
                <label for="">Name: </label>
                <input type="text" id="name">
                <label for="">Shout Text: </label>
                <input type="text" id="shout">
                <input type="submit" id="submit" value="SHOUT!">
            </form>
        </footer>
    </div>
</body>
</html>