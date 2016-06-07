<?php

define("QUEUE", 54100);

$queue = msg_get_queue(QUEUE);

// initialization
$msg_type = NULL;
$msg = NULL;
$max_msg_size = 512; // the max size of a message

// main while loop
while(msg_receive($queue, 0, $msg_type, $max_msg_size, $msg)) {
	// 1 message received
	echo "<< message received >>: $msg\n";
}


?>