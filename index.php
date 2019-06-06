<?php

// Load Configs
require_once 'config.php';

/**************************************************
 * SIMPLE MVC 
 * This MVC is very simple and without a htaccess that would direct all calls to a file or would allow a mod_rewrite.
 ******************************************************************************/

// Grab the GET param p for Page, we set in our url
// Here is the problem that we do not really control what comes in that should be much safer, that's not safe enough.
// For example, an array with a whitelist
$page = (string) filter_input(INPUT_GET, 'p', FILTER_SANITIZE_ENCODED);

// Router
switch ($page) {
    // Add more pages
    case "about":
        $content = getData(1);
        $data["image"] = "core/img/apple-mac.jpg";
        $typ = 'tpl/content.tpl.php';
        break;
    case "blog":
        $content = getData(2);
        $data["image"] = "core/img/apple-mac.jpg";
        $typ = 'tpl/content.tpl.php';
        break;
    case "contact":
        $content = getData(3);
        $data["image"] = "core/img/apple-mac.jpg";
        $typ = 'tpl/contact.tpl.php';
        break;
    case "support":
        $content = getData(4);
        $data["image"] = "core/img/apple-mac.jpg";
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
        $data["image"] = "core/img/apple-mac.jpg";
        $typ = 'tpl/content.tpl.php';
        break;
}

// Default
require_once 'tpl/default.tpl.php';