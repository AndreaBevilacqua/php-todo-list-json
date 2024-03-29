<?php
header ('Content-Type: application/json');

$source_path = __DIR__ . '/../database/tasks.json';

$json_data = file_get_contents($source_path);

$tasks = $json_data;

$task_text = $_POST['task'] ?? '';

if ($task_text) {
    
    $tasks = json_decode($tasks, true);

    $new_task = [
        'done' => false,
        'text' => $task_text,
        'id' => uniqid()
    ];

    if(in_array($new_task, $tasks)){
        echo json_encode('{"error": "Si é verificato un errore"}');
    } else {
        $tasks[] = $new_task;
    }

    $tasks = json_encode($tasks);

    file_put_contents($source_path, $tasks);
}


echo $tasks;