<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\Skill;
use App\Policies\ProjectPolicy;
use App\Policies\SkillPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Project::class => ProjectPolicy::class,
        Skill::class => SkillPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
