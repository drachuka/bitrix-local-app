<?php
// Выводим всё, что прислал Bitrix24
file_put_contents("log.txt", print_r($_REQUEST, true), FILE_APPEND);
echo "OK";
