<?php

namespace Panelis\Job\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;

/**
 * @property string $exception
 * @property int $id
 */
class FailedJob extends Model
{
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->useLogName('job')->logOnly(['uuid', 'connection', 'queue', 'failed_at'])->logOnlyDirty()->dontLogEmptyChanges();
    }

    public function getDescriptionForEvent(string $eventName): string
    {
        return 'job::activity.failed_job_'.$eventName;
    }
}
