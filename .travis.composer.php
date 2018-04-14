<?php

$version = getenv('DOCTRINE');

if (!$version || $version == 'default') {
    exit;
}

echo "Kdyby/Doctrine version " . $version . PHP_EOL;

$file = __DIR__ . '/composer.json';
$content = file_get_contents($file);
$composer  = json_decode($content, TRUE);
if (!isset($composer['require']['kdyby/doctrine'])) {
    exit(255);
}
$composer['require']['kdyby/doctrine'] = $version;
$content = json_encode($composer);
file_put_contents($file, $content);