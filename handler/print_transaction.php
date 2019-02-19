<?php

use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

function print_transaction($when, $userId){
    if ($userId != 'U13bf0657b7444e955a594ba8d039cc7f'){
        $result = new TextMessageBuilder("You're not registered");
    }
    else {
        $transaction = file_get_contents('https://cash-manager-1c0d9.firebaseio.com/time.json');
        $transaction = json_decode($transaction, true);

        foreach ($transaction as $paid){
            $outputMessage = new TextMessageBuilder($paid);
            
            $result = $bot->replyMessage($event['replyToken'], $outputMessage);
			return $result->getHTTPStatus().' '.$result->getRawBody();
        }
    }

    return $result;
}