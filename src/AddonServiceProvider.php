<?php

namespace Eleven59\LaravelValidationRules;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'eleven59';
    protected $packageName = 'laravel-validation-rules';
    protected $commands = [];
}
