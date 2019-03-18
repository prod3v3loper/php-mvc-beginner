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
    $data[] = array("Startseite", "Hier ein beispiel HOME");
    $data[] = array("Über uns", "Hier ein beispiel ABOUT");
    $data[] = array("Service", "Hier ein beispiel SERVICE");
    $data[] = array("Kontakt", "Hier ein beispiel KONTAKT");
    $data[] = array("Referenz", "Hier ein beispiel REFERENZ");

    return $data[$id];
}

/**
 * DEBUGGING
 * 
 * We debug in dev mode
 */
function debugging($mode = false) {

    if (DEBUG || $mode === true) {

        echo '<pre>';
        echo 'GET: ';
        print_r($_GET);
        echo 'POST: ';
        print_r($_POST);
        echo 'REQUEST: ';
        print_r($_REQUEST);
        echo 'SERVER: ';
        print_r($_SERVER);
        echo '</pre>';
        
        ini_set('display_errors', 1);
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
    }
    else {

        echo '<script type="text/javascript">';
        echo 'window.location.href="' . $file . '";'; // WINDOW LOCATION
        die();
        echo '</script>';

        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=' . $file . '" />'; // HTML REFRESH
        die();
        echo '</noscript>';
    }
}
