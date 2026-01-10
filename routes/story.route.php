<?php

$title = 'Rodney Kubayi';
$link1 = 'Resume';
$link2 = 'My-story';
$link3 = 'Message';
$link4 = 'Navigate to front page';

$heading = 'My story';
$p1 = 'My path to a Diploma in Computer Engineering has been a masterclass in adaptability and perseverance proof that the most determined route is rarely a straight line.';
$p2 = 'After finishing matric in 2020, I took a gap year to gain practical, hands-on experience through various part-time roles. Eager to advance my education, I enrolled at TUT in 2022 as an NSFAS student. However, an administrative twist due to initial dual university registrations meant my funding was directed to CPUT instead. This unexpected hurdle required a strategic pivot.';
$p3 = 'Rather than seeing this as a setback, I treated it as an opportunity: I took another year to further develop my professional skills while recalibrating my academic plan. In 2024, I seamlessly transitioned to CPUT, where I fully dedicated myself to my computer engineering studies.';
$p4 = 'This journey culminated in November 2025, when I successfully passed all my final-year modules. I am now awaiting graduation equipped not only with technical knowledge in computer engineering but also with real-world resilience, problem-solving agility, and a steadfast commitment to seeing long-term goals through to completion.';
$p5 = 'I’m excited to bring this unique blend of technical foundation, adaptability, and tenacity to my next opportunity in the tech industry.';


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/../app/view/css/story.css"/>
    </head>
    <body>
        <nav id="right_header">
            <ul>
                <li><a href="/../public/resume"><?php echo $link1 ?></a></li>
                <li><a href="#"><?php echo $link2 ?></a></li>
                <li><a href="/../public/message"><?php echo $link3 ?></a></li>
            </ul>
        </nav>
        <section id="message_container">
            <article >
                <h1><?php echo $heading ?></h1>
                <p><?php echo $p1 ?></p>
                <p><?php echo $p2 ?></p>
                <p><?php echo $p3 ?></p>
                <p><?php echo $p4 ?></p>
                <p><?php echo $p5 ?></p>
            </article>
            
        </section>
        <footer>
            <div id="social_media">
                <a href="https://wa.me/27729898143">
                    <img width="20" height="20" src="/../app/view/icons/whatsapp.svg" alt="whatsapp">
                </a>
                <a href="#">
                    <img width="20" height="20" src="/../app/view/icons/linkedin.svg" alt="linkedin">
                </a>
                <a href="mailto:mrkubayi010726@gmail.com">
                    <img width="20" height="20" src="/../app/view/icons/gmail.svg" alt="gmail">
                </a>
                <a href="#">
                    <img width="20" height="20" src="/../app/view/icons/youtube.svg" alt="youtube">
                </a>
                <a href="https://github.com/Rodney-tech">
                    <img width="20" height="20" src="/../app/view/icons/github.svg" alt="github">
                </a>
            </div>
            
        </footer>
    </body>
</html>



