<?php

define("QUEUE", 54100);

$queue = msg_get_queue(QUEUE);

// send $argv[1] to 
if(count($argv) != 2) {
	die("wrong arguments!\n");
}

if(msg_send($queue, 12, $argv[1])) {
	echo "a message has been sent to queue.\n";
	print_r(msg_stat_queue($queue));
} else {
	die("couldn't send message to queue.\n");
}


?>