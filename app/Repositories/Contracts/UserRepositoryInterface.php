<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function getRankedWatchedTime();
    public function getOrderedUsers();
}
