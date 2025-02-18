<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('return-zero', fn() => 0)->purpose('Return 0');

Artisan::command('return-one', fn() => 1)->purpose('Return 1');
