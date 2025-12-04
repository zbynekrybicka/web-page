<pre><?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = $_POST['data'] ?? '';
    file_put_contents(__DIR__ . '/log.txt', $data . PHP_EOL, FILE_APPEND);
    echo json_encode(['status' => 'success', 'message' => 'Data received via POST', 'data' => $data]);
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