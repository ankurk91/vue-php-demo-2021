<?php
require __DIR__ . '/../vendor/autoload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vue.js + php demo</title>
    <link rel="stylesheet" href="<?php echo asset_url('css/app.css') ?>"/>
</head>
<body>
<h1>Vue.js + php demo</h1>

<main id="app">
    <welcome></welcome>
</main>

<script src="<?php echo asset_url('js/manifest.js', 'dist') ?>"></script>
<script src="<?php echo asset_url('js/vendor.js', 'dist') ?>"></script>
<script src="<?php echo asset_url('js/app.js', 'dist') ?>"></script>
</body>
</html>