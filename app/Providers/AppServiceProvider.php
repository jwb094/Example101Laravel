<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use illuminate\Pagination\Paginator;
use App\Models\Job;
use App\Models\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Model::preventLazyLoading();

       // Paginator::useBootstrapFive();
        //Step DEfine Gates Inside AppService Providerss
    //    Gate::define('edit-job',function(User $user, Job $job){
    
    // });

    }
}
