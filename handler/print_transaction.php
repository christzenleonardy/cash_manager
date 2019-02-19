<?php

use \LINE\LINEBot\MessageBuilder\TextMessageBuilder as TextMessageBuilder;

function print($userId){
    if ($userId != ''){
        $result = new TextMessageBuilder("You're not registered");
    }
    else {
        $transaction = file_get_contents('https://cash-manager-1c0d9.firebaseio.com/time.json');
        $transaction = json_decode($transaction, true);

        foreach ($transaction as $paid => $answer){
            $outputMessage = new TextMessageBuilder($answer);
            
            $result = $bot->replyMessage($event['replyToken'], $outputMessage);
			return $result->getHTTPStatus().' '.$result->getRawBody();
        }
    }

    return $result;
}