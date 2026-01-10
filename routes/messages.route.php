<?php

require_once '../app/view/messages.view.php';

$title = 'Rodney Kubayi';
$link1 = 'Resume';
$link2 = 'My-story';
$link3 = 'Message';
$link4 = 'Navigate to front page';

$h_tag = 'Send a message';
$btn = 'SEND';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/../app/view/css/message.css"/>
    </head>
    <body>
        <nav id="right_header">
            
            <ul>
                <li><a href="/../public/resume"><?php echo $link1 ?></a></li>
                <li><a href="/../public/story"><?php echo $link2 ?></a></li>
                <li><a href="#"><?php echo $link3 ?></a></li>
            </ul>
        </nav>
        <section id="intro_container">
            <div id="intro_cover">
                
                <div id="left_container">
                    <h1><?php echo $h_tag ?></h1>
                    <form action="/../public/formhandler" id="form_container" method="post" autocomplete="on">
                        <?php messageInputs() ?>
                        <button type="submit" id="btn_click"><?php echo $btn ?></button>
                    </form>
                    <h5><a id="back_home" href="/../public/"><?php echo $link4 ?></a></h5>
                </div>
                <div id="right_container">
                    
                </div>
            </div>
        </section>
        <script src="/../app/view/js/script.js"></script>
    </body>
</html>

<?php 
/*
textarea.addEventListener('focus',()=>{
    setInterval(() => {
        textarea.style.boxshadow = '0 0 3px $colors[i]';
        i = (i+1) %colors.length;
    }, 500); 
});

*/