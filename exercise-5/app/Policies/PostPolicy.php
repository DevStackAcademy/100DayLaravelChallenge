<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    public function delete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
}
