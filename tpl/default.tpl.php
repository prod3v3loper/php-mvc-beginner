<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <title>MVC Beginner by prod3v3loper</title>
        <link href="core/css/style.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'tpl/nav.tpl.php';
        include 'tpl/header.tpl.php';
        if (isset($typ)) {
            include $typ;
        }
        include 'tpl/footer.tpl.php';
        ?>
    </body>
</html>