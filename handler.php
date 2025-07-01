<?php
// handler.php — простой обработчик Bitrix24

// Устанавливаем заголовки
header('Content-Type: application/json');

// Получаем данные (если есть)
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Ответ по умолчанию
$response = [
    'status' => 'OK',
    'timestamp' => time(),
    'input_received' => $data
];

// Возвращаем ответ
echo json_encode($response);
