<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="content">
        <?php
            $id = $_GET['id'] ?? 'news';
            if (preg_match('/^[a-zA-Z0-9_-]+$/', $id) === 0) {
                $id = '404';
            }
            if (file_exists("pages/$id.php")) {
                include("pages/$id.php");
            } else {
                include("pages/404.php");
            }
        ?>
    </div>
</main>
</body>
</html>