<?php

// Load Configs
require_once 'config.php';

// Debugging, this function allow to manipuliate with true param and overwrite the defined DEBUG variable.
debugging();

/**************************************************
 * SIMPLE MVC 
 * Here we need php GET param and switch funtion.
 ******************************************************************************/

// Grab the GET param p for Page, we set in our url
$page = (string) filter_input(INPUT_GET, 'p', FILTER_SANITIZE_ENCODED);

// Switch
switch ($page) {
    case "about":
        $content = getData(1);
        $typ = 'tpl/content.tpl.php';
        break;
    case "service":
        $content = getData(2);
        $typ = 'tpl/content.tpl.php';
        break;
    case "contact":
        $content = getData(3);
        $typ = 'tpl/contact.tpl.php';
        break;
    case "reference":
        $content = getData(4);
        $typ = 'tpl/content.tpl.php';
        break;
    case "submit":
        // TODO send mail
        redirectURL("index.php?p=contact");
    break;
    case "admin":
        // TODO only after login
        $arr = unserialize(file_get_contents(DATA_SRC));
        foreach($arr as $a) {
            echo $a;
        }
        $typ = 'tpl/admin_page.tpl.php';
    break;
    case "newPage":
        // TODO only after login and filter input
        // All incoming data is evil
        file_put_contents(DATA_SRC, serialize($_POST));
        redirectURL("index.php?p=admin");
    break;
    default:
        $content = getData(0);
        $typ = 'tpl/content.tpl.php';
        break;
}

// Default
include_once 'tpl/default.tpl.php';