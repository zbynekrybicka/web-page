<?php
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    exit(0);
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = file_get_contents("php://input");
    file_put_contents(__DIR__ . '/log.txt', json_encode([date("Y-m-d H:i:s"), json_decode($data, true)]) . PHP_EOL, FILE_APPEND);
} else {
    if (($_GET['key'] ?? "") === "dkfyqow") {
        $content = file_get_contents(__DIR__ . '/log.txt');
        $data = explode(PHP_EOL, trim($content));
        $output = [];
        foreach ($data as $index => &$line) {
            [$timestamp, $log] = json_decode(trim($line));
            $log = (array) $log;
            if (array_key_exists("header", $log)) {
                $output[] = "<h2>{$log['header']}</h2>";
            }
            if (array_key_exists("note", $log)) {
                $output[] = "<p>{$log['note']}</p>";
            }
            if (array_key_exists("log", $log)) {
                $output[] = "<pre>{$timestamp}\n" . json_encode($log['log'], JSON_PRETTY_PRINT, 512) . "</pre>";
            }
            if (array_key_exists("breakpoint", $log)) {
                $output = [];
            }

        }
        echo implode("\n", $output);    
    }
}