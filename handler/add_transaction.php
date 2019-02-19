<?php

use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

function add($query, $userId){
    include 'post.php';

    if ($userId != 'U13bf0657b7444e955a594ba8d039cc7f'){
        $result = new TextMessageBuilder('Access denied');
    }
    else{
        if ($query == null){
            $result = new TextMessageBuilder("Add some transaction");
        }
        else {
            $querySplit = explode(' ', $query, 3);
            $time = strtolower($querySplit[0]);
            $transaction = $querySplit[1];
            $price = $querySplit[2];

            postData('time/'.$time, $transaction, $price);

            $result = new TextMessageBuilder('Transaction added');
        }
    }

    return $result;
}