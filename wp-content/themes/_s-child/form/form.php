<?php

function send($from, $to, $subject, $body)
{
    $header = "From: $from\nReply-To: $from\n";
    if (mb_send_mail($to, $subject, $body, $header)) {
        return 1;
    } else {
        return 0;
    };
}
