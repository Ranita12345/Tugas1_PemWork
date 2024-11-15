<?php

namespace App\Policies;

use App\Models\User;
use App\Models\chirp;
use Illuminate\Auth\Access\Response;

class NewChirpPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, chirp $chirp)
    {
        return  $chirp->user_id === $user->id;

    }


    public function delete(User $user, chirp $chirp)
    {
        return $this->update($user, $chirp);

    }
}
