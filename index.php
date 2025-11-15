<h1>Under construction</h1>
<?php die;
$id = $_GET['id'] ?? 'news';
if (preg_match('/^[a-zA-Z0-9_-]+$/', $id) === 0) {
    $id = '404';
}
if (file_exists("pages/$id.php")) {
    $filename = __DIR__ . "/pages/$id.php";
} else {
    $filename = __DIR__ . "/pages/404.php";
}
$content = file_get_contents($filename);
$lines = explode("\n", $content);
if (count($lines) > 0 && preg_match('/<h1>(.*?)<\/h1>/', $lines[0], $matches)) {
    $pageTitle = $matches[1] . " - ";
} else {
    $pageTitle = "";
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$pageTitle; ?>Zbyněk Rybička.cz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="header">
    <nav>
        <div class="logo">Zbyněk Rybička.cz</div>
        <ul class="nav-links">
            <li><a href="/">News</a></li>
            <li><a href="/research-and-experiments">Research &amp; Experiments</a></li>
            <li><a href="/reflections-and-opinions">Reflections &amp; Opinions</a></li>
            <li><a href="/hire-me">Hire me</a>
        </ul>
    </nav>
</header>
<main class="container">
    <div class="content"><?php include $filename; ?></div>
</main>
</body>
</html>