<?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'portfolio') {
            $currentPage = "portfolio";
        }
        elseif ($_GET['action'] == 'espaceperso') {
            $currentPage = "espaceperso";
        }
    }
    else {
        $currentPage = "Bryan's Domain";
    }
