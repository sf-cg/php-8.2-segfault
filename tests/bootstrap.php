<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__.'/../bootstrap/app.php';
/** @var \Illuminate\Foundation\Console\Kernel $console */
$console = $app->make(Illuminate\Contracts\Console\Kernel::class);
$console->bootstrap();

// Configure PHP-VCR
VCR\VCR::configure()
    ->setCassettePath(__DIR__ . '/__cassettes__')
    ->enableLibraryHooks(['curl']) // curl is required to cause segfault
    ->setMode('once');
