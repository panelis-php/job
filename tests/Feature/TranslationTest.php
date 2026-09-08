<?php

it('loads the job label translation', function (): void {
    expect(__('job::job.label'))->toBe('Queue');
});
