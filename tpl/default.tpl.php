<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <title>MVC Beginner (Bootstrap)</title>
    </head>
    <body>
        <?php
        include 'tpl/nav.tpl.php';
        if (isset($typ)) {
            include $typ;
        }
        include 'tpl/footer.tpl.php';
        ?>
    </body>
</html>