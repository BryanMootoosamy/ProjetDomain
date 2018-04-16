<?php
    function attribution($virtualVar) {
        if (isset($_POST[$virtualVar]) && !empty($_POST[$virtualVar])) {
            return $_POST[$virtualVar];
        }
    }
    function sanitize($virtualVar, $flag) {
        if (isset($virtualVar) && !empty($virtualVar)) {
            $sanitized = filter_var($virtualVar, $flag);
            return $sanitized;
        }
    }
