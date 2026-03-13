<?php

// Vercel serverless function for Laravel
// Ensure we're in the right directory
chdir(__DIR__ . '/../');

// Load Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Create necessary directories for Laravel
$storagePath = '/tmp/storage';
if (!file_exists($storagePath)) {
    mkdir($storagePath, 0755, true);
    mkdir($storagePath . '/framework', 0755, true);
    mkdir($storagePath . '/framework/cache', 0755, true);
    mkdir($storagePath . '/framework/sessions', 0755, true);
    mkdir($storagePath . '/framework/views', 0755, true);
    mkdir($storagePath . '/logs', 0755, true);
}

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
