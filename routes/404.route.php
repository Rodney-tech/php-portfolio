<!DOCTYPE html>
<html lang="en">
    <head>
        <title>error: code 404</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/../app/view/css/404.css"/>
    </head>
    <body>
        <div>
            <h1><strong>Error:</strong> code 404</h1><br>
            <p>Refresh to home page in</p>
            <span id="countdown">5</span>
        </div>    
    </body>
    <<script src="/../app/view/js/404_script.js"></script>
</html>

<?php 

header("Refresh: 6; url=../public/home");
