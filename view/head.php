<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/style/style.css">
        <meta name="viewport" content="width=device-width">
        <?php
            if ($currentPage == "portfolio") {
                echo "<title>Portfolio</title>";
            }
            elseif ($currentPage == "espaceperso") {
                echo "<title>Espace Personnel</title>";
            }
            else {
                echo "<title>Bryan's Domain</title>";
            }

        ?>
    </head>
