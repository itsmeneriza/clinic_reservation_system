<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Task;
use App\Policies\TaskPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register your application services here
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register the Task policy
        Gate::policy(Task::class, TaskPolicy::class);
    }
}
