<?php
header('X-Accel-Buffering: no');
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

for($i=0;$i<50;$i++){
    $time = date('r');
    echo "data: The server time is: {$time}\n\n";
    ob_flush();
    flush();
    sleep(1);
}
