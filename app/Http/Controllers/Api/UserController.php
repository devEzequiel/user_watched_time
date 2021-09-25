<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface as UserInterface;

class UserController extends Controller
{
    private $users;

    public function __construct(UserInterface $users)
    {
        $this->users = $users;
    }

    public function getChannels()
    {
        try {
            $channels = $this->users->getRankedWatchedTime();

            return response()->json([
                'data' => ['Time each channel was watched',  $channels]
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function getUsers()
    {
    }
}
