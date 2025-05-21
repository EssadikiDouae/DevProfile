<?php

namespace App\Policies;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SkillPolicy
{
   
    public function viewAny(User $user): bool
    {
        return false;
    }


    public function view(User $user, Skill $skill): bool
    {
        return false;
    }


    public function create(User $user): bool
    {
        return false;
    }

    
    public function update(User $user, Skill $skill)
{
    return $user->id === $skill->user_id;
}

public function delete(User $user, Skill $skill)
{
    return $user->id === $skill->user_id;
}


    
    public function restore(User $user, Skill $skill): bool
    {
        return false;
    }

   
    public function forceDelete(User $user, Skill $skill): bool
    {
        return false;
    }
}
