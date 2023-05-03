<?php

include 'templates/head.php';

$questions = $_FILES['questoes'] ?? false;


if (!$questions) {
    die('Nenhum arquivo enviado');
}

$content = file_get_contents($questions['tmp_name']);

$content_array = preg_split('/\r\n|\r|\n/',  $content);

$content_array = array_filter($content_array);

foreach ($content_array as $data) {
    $data = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $data);
    $is_question = is_numeric(mb_substr(trim($data), 0, 1, 'UTF-8'));
    include "templates/questions.php";
}


include 'templates/footer.php';
