<?php

function session_form_err_handler($errorCase) {
    if(isset($_SESSION[$errorCase])) {
        return $_SESSION[$errorCase];
    }
    else {
        return "";
    }
}

function session_form_err_vanisher($errorCase) {
    if(isset($_SESSION[$errorCase]))
    unset($_SESSION[$errorCase]);
}