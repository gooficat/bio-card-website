 <?php 
    $password = $_POST["password"];
//set the password here
    if (isset($password) and $password == "PASSWORD123") {
        $filePath = "content";

        $password = $_POST["password"];
        $status = $_POST["status"];
        $social1 = $_POST["social1"];
        $social2 = $_POST["social2"];
        $social3 = $_POST["social3"];
        $social4 = $_POST["social4"];

        $json = json_encode([
            "password"=>$password,
            "status"=>$status,
            "social1"=>$social1,
            "social2"=>$social2,
            "social3"=>$social3,
            "social4"=>$social4
        ]);

        file_put_contents($filePath . ".json", $json);
    }
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
        <h2 class="">Bean's Site</h2>
        <hr>
        <form method="post">
        <div class="cardmain">
            <div class="column">
                <h4>status:</h4>
                <textarea id="status" class="" name="status">
                </textarea>
                <input type="form" name="password" placeholder="password">
            </div>
            <div class="column rightcolumn">
                <h3>My socials</h3>
                <ul class="">
                    <input type="form" name="social1">
                    <input type="form" name="social2">
                    <input type="form" name="social3">
                    <input type="form" name="social4">
                </ul>
                <button type="submit">Submit</button>
            </div>
        </div>
        </form>
    </div>
    </main>
    <footer>
        <p>this website was made by<a href="https://gooficat.github.io">gooficat</a></p>
    </footer>
</body>
</html
