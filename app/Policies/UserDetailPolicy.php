<?php

namespace App\Policies;

use App\Models\User;

class UserDetailPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    // App\Policies\UserDetailPolicy.php

    public function view(User $user)
    {
        // Hanya admin (role_id 1) yang bisa melihat detail pengguna
        return auth()->check() && auth()->user()->role_id==1;
    }
}
