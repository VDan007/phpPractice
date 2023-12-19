<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $view_bag['title'] ?> </title>
    <link rel="stylesheet" href="iindex.css">
</head>
<body>

    <header>
        <nav>
            <ul class="nav_ul">
                <li> <a href="/glossary">home</a> </li>
                <!-- <li> <a href="input.php">input</a> </li>
                <li> <a href="login.php">login</a></li>
                <li> <a href="logout.php">logout</a> </li> -->
            </ul>
        </nav>
    </header>

    <?php

        require("$name.view.php");

    ?>

    <footer style="position:absolute; bottom:0;">
        <p>copyright VD 2023</p>
    </footer>


</body>
</html>