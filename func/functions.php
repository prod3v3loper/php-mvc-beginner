<?php

/**
 * DATABASE EMULATOR
 * 
 * This simulate our database data
 * 
 * @param type $id
 * @return string
 */
function getData($id) {

    $data = array();
    $data[] = array("Welcome to the Melabuai MVC Homepage", "This MVC is an <b>Beginner</b> Mode View Controller");
    $data[] = array("About", "I'm a web engineer and I'm working on various programming languages ​​frameworks and techniques.");
    $data[] = array("Blog", "I offer you a lot of information and that is very valuable information.");
    $data[] = array("Contact", "Here's an example CONTACT");
    $data[] = array("Support", "Here's an example Support");

    return $data[$id];
}

/**
 * DEBUGGING
 * 
 * We debug in dev mode
 */
function debugging($mode = false) {

    if ($mode === true) {

        // Overwrite ini settings debug
        ini_set('html_errors', 1);
        ini_set('error_reporting', -1); // E_ALL
        ini_set('display_errors', 1); // On
        error_reporting(-1); // Report all
    }
}

/**
 * REDIRECT
 * 
 * This function redirect in all ways, if php header send then use javascript. 
 * If javascript not exists we redirect with html
 */
function redirectURL($file) {

    if (!headers_sent()) {

        header("Location: $file"); // HEADER LOCATION
        die();
    } else {

        echo '<script type="text/javascript">';
        echo 'window.location.href="' . $file . '";'; // WINDOW LOCATION
        echo '</script>';

        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=' . $file . '" />'; // HTML REFRESH
        echo '</noscript>';
    }
}
