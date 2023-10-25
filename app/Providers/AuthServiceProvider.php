<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {                                   // always takes the current $user as argument
        Gate::define("admin", function ($user) {
            // if ($user->hasRole("admin"))
            if (str_ends_with($user->email, "@admin.com")) {
                return true;
            } else {
                return false;
            }
        });
    }
}
