 <?php
    $contentjson = file_get_contents("content.json");
    $content = json_decode(
        $contentjson
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean's Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>

    </nav>
    <main>
    <div class="card">
        <h2 class="grow">Bean's Site</h2>
        <hr>
        <div class="cardmain">
            <div class="column grow">
                <h4>status:</h4>
                <div id="status" class="grow">
                    <?php
                    echo htmlspecialchars($content->status);
                    ?>
                </div>
            </div>
            <div class="column rightcolumn grow">
                <h3>My socials</h3>
                <ul class="grow">
                    <li><?php echo htmlspecialchars($content->social1); ?></li>
                    <li><?php echo htmlspecialchars($content->social2); ?></li>
                    <li><?php echo htmlspecialchars($content->social3); ?></li>
                    <li><?php echo htmlspecialchars($content->social4); ?></li>

                </ul>
            </div>
            <a href="edit.php">edit</a>
        </div>
    </div>
    </main>
    <footer>
        <p>this website was made by<a href="https://gooficat.github.io">gooficat</a></p>
    </footer>
</body>
</html