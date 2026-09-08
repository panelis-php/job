<?php

namespace Panelis\Job\Providers;

use Illuminate\Support\ServiceProvider;

class JobServiceProvider extends ServiceProvider
{
    private const string NAMESPACE = 'job';

    public function boot(): void
    {
        $settingClass = 'Panelis\\Setting\\Models\\Setting';
        if (class_exists($settingClass) && config()->has('activitylog.enabled')) {
            config()->set('activitylog.enabled', $settingClass::get('activity.enabled', config('activitylog.enabled')));
        }

        $this->loadTranslationsFrom(__DIR__.'/../../lang', self::NAMESPACE);
    }

    public function register(): void {}
}
