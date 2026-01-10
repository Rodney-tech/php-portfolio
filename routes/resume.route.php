<?php 

$title = 'Rodney Kubayi';
$link1 = 'Resume';
$link2 = 'My-story';
$link3 = 'Message';
$link4 = 'Navigate to front page';

$name = 'Rodney Nyelisani Kubayi';

$p_tag = 'Recent Computer Engineering Diploma Graduate, with adaptability';
$p_tag2 = 'skills.';

$skills_tag = 'Skills';
$skills = [
    's1' => 'Software Development (JAVA)',
    's2' => 'Programming (C/C++)',
    's3' => 'Web Development (php, html, css)',
    's4' => 'Microprocessor (Arduino)',
    's5' => 'Logical Thinking',
    's6' => 'Adaptability',
    's7' => 'Problem Solving',
    's8' => 'Process Control'
];

$education_tag = 'Education';
$education = [
    'e1' => 'Cape Peninsula University of Technology',
    'e2' => 'Diploma in Computer Engineering',
    'e3' => 'February 2024 - December 2025'
];

$work_experience_tag = 'Work Experience';
$work_experience = [
    'w1' => 'Petrol Attendant | Sasol',
    'w2' => 'November 2023 - February 2024 | Theressa Park',
    'w3' => 'Reason:',
    'w4' => 'went to CPUT',
    'w5' => 'Car Washer | Sasol',
    'w6' => 'August 2023 - November 2024 | Theressa Park',
    'w7' => 'Reason:',
    'w8' => 'promoted to be a Petrol Attedant',
    'w9' => 'Paving | Willy Construction ',
    'w10' => 'August 2021 - September 2021',
    'w11' => 'Reason:',
    'w12' => 'Short contract'
];

$languages_tag = 'Languages';
$languages = [
    'v1' => 'speak',
    'v2' => 'read',
    'v3' => 'write',
    'c1' => 'good',
    'c2' => 'fair',
    'c3' => 'poor',
    'l1' => 'English',
    'l2' => 'Sepedi',
    'l3' => 'Zulu',
    'l4' => 'Venda',
    'l5' => 'Tsonga'
];

$technical_tag = 'Technical Skills';
$technical = [
    't1' => 'Cisco Router Configuration',
    't2' => 'Vlans Configuration',
    't3' => 'Network Protocols (TCP/IP, DNS, DHCP)',
    't4' => 'PC Maintenace'
];

$contacts_tag = 'Contacts';
$contacts = [
    'c1' => 'E-mail:',
    'c2' => 'mrkubayi010726@gmail.com',
    'c3' => 'preferred',
    'c4' => 'Phone: +27 72 989 8143 / +27 69 217 4247',
    'c5' => 'Location: South Africa, Pretoria, Soshanguve'
];

$reference_tag = 'Reference';
$reference = [
    'r1' => 'Mr J Manare',
    'r2' => 'Supervisor (sasol)',
    'r3' => '+27 69 229 3193'
];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/../app/view/css/resume_styler.css"/>
    </head>
    <body>
        <a id="back_home" href="/../public/"><?php echo $link4 ?></a>
        <nav id="right_header">
            <ul id="list_non">
                <li id="resume_nav"><a href="#"><?php echo $link1 ?></a></li>
                <li id="story_nav"><a href="/../public/story"><?php echo $link2 ?></a></li>
                <li  id="message_nav"><a href="/../public/message"><?php echo $link3 ?></a></li>
            </ul>
        </nav>
        <section id="resume">
            <section id="resume_sections">
                <div id="first_div">
                    <h1><?php echo $name ?></h1>
                    <div id="resume_details">
                        <p><?php echo $p_tag ?><br><?php echo $p_tag2 ?></p>
                        <h2><?php echo $skills_tag ?></h2>
                        <ul>
                            <li><?php echo $skills['s1'] ?></li>
                            <li><?php echo $skills['s2'] ?></li>
                            <li><?php echo $skills['s3'] ?></li>
                            <li><?php echo $skills['s4'] ?></li>
                            <li><?php echo $skills['s5'] ?></li>
                            <li><?php echo $skills['s6'] ?></li>
                            <li><?php echo $skills['s7'] ?></li>
                            <li><?php echo $skills['s8'] ?></li>
                        </ul>
                        <h2><?php echo $education_tag ?></h2>
                        <ul>
                            <li><?php echo $education['e1'] ?></li>
                            <li><?php echo $education['e2'] ?></li>
                            <li><?php echo $education['e3'] ?></li>
                        </ul>
                        <h2><?php echo $work_experience_tag ?></h2>
                        <h3><?php echo $work_experience['w1'] ?></h3>
                        <ul>
                            <li><?php echo $work_experience['w2'] ?></li>
                            <li><strong><?php echo $work_experience['w3'] ?></strong> <?php echo $work_experience['w4'] ?></li>
                        </ul>
                        <h3><?php echo $work_experience['w5'] ?></h3>
                        <ul>
                            <li><?php echo $work_experience['w6'] ?></li>
                            <li><strong><?php echo $work_experience['w7'] ?></strong> <?php echo $work_experience['w8'] ?></li>
                        </ul>
                        <h3><?php echo $work_experience['w9'] ?></h3>
                        <ul>
                            <li><?php echo $work_experience['w10'] ?></li>
                            <li><strong><?php echo $work_experience['w11'] ?></strong> <?php echo $work_experience['w12'] ?></li>
                        </ul>
                        <h3><?php echo $languages_tag ?></h3>
                        <table>
                            <tr>
                                <th></th>
                                <th><?php echo $languages['v1'] ?></th>
                                <th><?php echo $languages['v2'] ?></th>
                                <th><?php echo $languages['v3'] ?></th>
                            </tr>
                            <tr>
                                <td><?php echo $languages['l1'] ?></td>
                                <td><?php echo $languages['c1'] ?></td>
                                <td><?php echo $languages['c1'] ?></td>
                                <td><?php echo $languages['c1'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $languages['l2'] ?></td>
                                <td><?php echo $languages['c1'] ?></td>
                                <td><?php echo $languages['c1'] ?></td>
                                <td><?php echo $languages['c1'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $languages['l3'] ?></td>
                                <td><?php echo $languages['c1'] ?></td>
                                <td><?php echo $languages['c2'] ?></td>
                                <td><?php echo $languages['c3'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $languages['l4'] ?></td>
                                <td><?php echo $languages['c2'] ?></td>
                                <td><?php echo $languages['c2'] ?></td>
                                <td><?php echo $languages['c3'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $languages['l5'] ?></td>
                                <td><?php echo $languages['c2'] ?></td>
                                <td><?php echo $languages['c3'] ?></td>
                                <td><?php echo $languages['c3'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="second_div">
                    <h2><?php echo $technical_tag ?></h2>
                    <ul>
                        <li><?php echo $technical['t1'] ?></li>
                        <li><?php echo $technical['t2'] ?></li>
                        <li><?php echo $technical['t3'] ?></li>
                        <li><?php echo $technical['t4'] ?></li>
                    </ul>
                    <h2><?php echo $contacts_tag ?></h2>
                    <p><?php echo $contacts['c1'] ?> <a href="mrkubayi010726@gmail.com"><?php echo $contacts['c2'] ?></a> | <i><?php echo $contacts['c3'] ?></i><br>
                        <?php echo $contacts['c4'] ?><br>
                        <?php echo $contacts['c5'] ?><br>
                    </p>
                    <h2><?php echo $reference_tag ?></h2>
                    <p id="last_p"><strong><?php echo $reference['r1'] ?></strong> - <?php echo $reference['r2'] ?><br>
                        <strong><?php echo $reference['r3'] ?></strong><br>
                    </p>
                    <img src="/../app/view/img/rodney.ico" alt="icon">

                </div>

            </section>

        </section>
    </body>
</html>
