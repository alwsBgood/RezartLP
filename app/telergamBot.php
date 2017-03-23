<?php

$chat_id = 183516110;

$text = 'Hello Master';

$disable_web_page_preview = null;
$reply_to_message_id = null;
$reply_markup = null;

$data = array(
        'chat_id' => urlencode($chat_id),
        'text' => urlencode($text),
        'disable_web_page_preview' => urlencode($disable_web_page_preview),
        'reply_to_message_id' => urlencode($reply_to_message_id),
        'reply_markup' => urlencode($reply_markup)
    );

$url = 'https://api.telegram.org/bot357106214:AAHodgTmo25b66zg0hgGIx_gmsBvpyHSvdk
/sendMessage';

//  open connection
$ch = curl_init();
//  set the url
curl_setopt($ch, CURLOPT_URL, $url);
//  number of POST vars
curl_setopt($ch, CURLOPT_POST, count($fields));
//  POST data
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
//  To display result of curl
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//  execute post
$result = curl_exec($ch);
//  close connection
curl_close($ch);