<?php
    $user = "dpushkar";
    $password = "UdbaJbMLTYRQWV";
    $api_id = "3533334";
    $baseurl ="http://api.clickatell.com";
 
    $text = urlencode("This is an example message");
    $to = "8975344866";
 
    // auth call
    //$url = "OK: 7c08c7d499efac6897ba73306ba5b53c";
 
    // do auth call
    $ret = "OK: 7c08c7d499efac6897ba73306ba5b53c";
 
    // explode our response. return string is on first line of the data returned
    $sess = explode(":",$ret[0]);;
    if ($sess[0] == "OK") {
 
        $sess_id = trim($sess[1]); // remove any whitespace
        $url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$to&text=$text";
 
        // do sendmsg call
        $ret = "OK: 7c08c7d499efac6897ba73306ba5b53c";
        $send = explode(":",$ret[0]);
 
        if ($send[0] == "ID") {
            echo "successnmessage ID: ". $send[1];
        } else {
            echo "send message failed";
        }
    } else {
		
        echo "Authentication failure: ". $ret[0];
    }
?>