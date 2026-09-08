<?php

namespace Panelis\Job\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Panelis\Job\Providers\JobServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            JobServiceProvider::class,
        ];
    }
}
