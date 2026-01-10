<?php

/*
<!--<label for="email">email</label><br>-->
<input required name="email" type="email" placeholder="user@example.com" autocomplete="email"><br>
<!--<label for="message">message</label><br>-->
<textarea required name="message" id="message_sent" placeholder="type your message here..." autocomplete="off"></textarea><br> 
 */


function messageInputs(){
    echo '<input required name="email" type="email" placeholder="user@example.com" autocomplete="email"><br>';
    echo '<textarea required name="message" id="message_sent" placeholder="type your message here..." autocomplete="off"></textarea><br> ';
}

