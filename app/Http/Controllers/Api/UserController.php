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
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }

    public function getUsers()
    {
        try {
            $users = $this->users->getOrderedUsers();

            return response()->json([
                'data' => ['User watched time record',  $users]
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }
}
