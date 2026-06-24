# Panelis Job

Monitor and manage queued jobs directly from the Panelis admin panel.

## Features

* View queued jobs
* View failed jobs
* Retry failed jobs
* Delete failed jobs
* Monitor queue activity
* Automatic Panelis plugin discovery

## Requirements

* PHP 8.3+
* Laravel 13+
* Filament 5+

## Installation

Install the package via Composer:

```bash
composer require panelis-php/job
```

Run migrations required by Laravel's database queue driver:

```bash
php artisan make:queue-table
php artisan migrate
```

For failed job monitoring:

```bash
php artisan make:queue-failed-table
php artisan migrate
```

## Usage

After installation, a **Jobs** menu will be available in the Panelis admin panel.

The Job module allows administrators to monitor queued jobs and manage failed jobs without accessing the server.

Available actions include:

* View queued jobs
* View failed jobs
* Retry failed jobs
* Delete failed jobs

## Queue Driver

This module is only active when Laravel is configured to use the `database` queue driver.

Example:

```env
QUEUE_CONNECTION=database
```

When another queue driver is used, the Job module remains inactive and does not register navigation items or resources.

## License

The MIT License (MIT).
