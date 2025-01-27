<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Job;
class TranslateJob implements ShouldQueue
{
    use Dispatchable,SerializesModels , InteractsWithQueue , Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $jobL)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        logger('Translating' . $this->jobL->title. 'to Spanish');
    }
}
