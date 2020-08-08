<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('allow_audience', function ($user){
            return $user->hasAnyRoles(['admin', 'editor','superadmin']);
        });

        Gate::define('onlyAdmin', function ($user){
           return $user->hasAnyRoles(['admin','superadmin']);
        });

        Gate::define('onlyEditor', function($user){
            return $user->hasRole('editor');
         });
    }
}
