<?php

use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

function add_transaction($query, $userId){
    include 'post.php';

    if ($userId != 'U13bf0657b7444e955a594ba8d039cc7f'){
        $result = new TextMessageBuilder('Access denied');
    }
    else{
        if ($query == null){
            $result = new TextMessageBuilder("Add some transaction");
        }
        else {
            $querySplit = explode(' ', $query, 2);
            $time = $querySplit[0];
            $transaction = $querySplit[1];

            postData('time/'.$time, $transaction);

            $result = new TextMessageBuilder('Transaction added');
        }
    }

    return $result;
}