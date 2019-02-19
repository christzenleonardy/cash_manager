<?php

use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

function teach($query, $userId){
    include 'post.php';
    if ($userId != 'U13bf0657b7444e955a594ba8d039cc7f'){
        $result = new TextMessageBuilder('Access denied');
    }
    else {
        $querySplit = explode(' ', $query, 2);
        $word = strtolower($querySplit[0]);
        $answer = $querySplit[1];

        postData('words/'.$word, $answer);

        if ($answer == null){
            $result = new TextMessageBuilder('Answer for "'.$word.'" deleted.');
        }
        else {
            $result = new TextMessageBuilder('Teach succeeded, try speaking "'.$word.'".');
        }
    }
}