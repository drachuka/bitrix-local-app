<?php
file_put_contents("log.txt", date('c') . " " . print_r($_REQUEST, true) . "\n", FILE_APPEND);
echo "OK";
