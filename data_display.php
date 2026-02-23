<?php session_start() ?>

<html>
    <head>
        <title>Alex James Wk 5 Performance Assessment</title>
    </head>

    <body>
        <h3>
            The name stored in a cookie is <?= $_COOKIE["name"] ?? "N/A" ?>
            <br>
            The date of birth stored in the session is <?= $_SESSION["dob"] ?: "N/A" ?>
        </h3>
        <a href="data_entry.php">Show Data Entry Page</a>
    </body>
</html>