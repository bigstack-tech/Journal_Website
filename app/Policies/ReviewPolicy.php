<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Journal_submission;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view reviews.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Journal_submission  $journal
     * @return bool
     */
    public function viewReviews(User $user, Journal_submission $journal)
    {

        // Your authorization logic here
        return $user->role === 'admin' || $user->id === $journal->user_id;

    }
}
