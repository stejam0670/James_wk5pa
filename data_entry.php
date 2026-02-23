<?php
session_start();

$dob = $_POST["dob"] ?? "";
$_SESSION["dob"] = $_POST["dob"] ?? "";

$name = $_POST["name"] ?? "";
setcookie("name", $name, time() + 3600, "/");
?>

<style>
    fieldset {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
    }
</style>

<html>
    <head>
        <title>Alex James Wk 5 Performance Assessment</title>
    </head>

    <body>
        <form method="POST">
            <fieldset>
                <h2>Enter Information</h2>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?= $name ?>">
                </div>

                <div>
                    <label for="dob">Date of Birth</label>
                    <input type="text" id="dob" name="dob" value="<?= $dob ?>">
                </div>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <a href="data_display.php">Show Data Display Page</a>
    </body>
</html>