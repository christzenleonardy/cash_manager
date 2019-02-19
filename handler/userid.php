<?php

use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

function userid($query, $userId){
    if ($userId == null){
        $result = new TextMessageBuilder ('User not found');
    }
    else {
        $result = new TextMessageBuilder($userId);
    }

    return $result;
}