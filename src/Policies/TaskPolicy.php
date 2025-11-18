<?php

namespace Lyre\School\Policies;

use Lyre\School\Models\Task;
use Lyre\Policy;
use Illuminate\Auth\Access\Response;

class TaskPolicy extends Policy
{
    public function __construct(Task $model)
    {
        parent::__construct($model);
    }

    public function viewAny($user): Response
    {
        return Response::allow();
    }

    public function view($user, $model): Response
    {
        return Response::allow();
    }
}

