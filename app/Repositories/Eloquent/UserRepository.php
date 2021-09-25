<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Models\WatchedTime;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    protected $model = User::class;

    protected $watchedTime = WatchedTime::class;

    public function getRankedWatchedTime()
    {
        try {
            $channels = $this->watchedTime::join('channel', 'channel.id', '=', 'watched_time.channel_id')
                ->select('channel.name', DB::raw('channel_id, sum(minutes) as minutes'))
                ->groupBy('channel_id')
                ->orderBy('minutes', 'DESC')
                ->get();

            return $channels;
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }

        return $channels;
    }

    public function getOrderedUsers()
    {
        // $users = DB::table('user')
        //     ->select(DB::raw('minutes, name(channel), avg(rate) as rates'))
        //     ->groupBy('recipe_id')
        //     ->get();
    }
}
