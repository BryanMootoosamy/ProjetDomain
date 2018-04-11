<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/style/style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
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
