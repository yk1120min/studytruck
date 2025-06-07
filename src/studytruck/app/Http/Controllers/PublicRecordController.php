<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Learninglog;

class PublicRecordController extends Controller
{
    public function index($public_id)
    {
        $user = User::where('public_id', $public_id) ->firstOrFail();
        $learningLogs = Learninglog::where('user_id', $user->id) ->latest()->get(); 

        return view('users.records.index', compact('user', 'learningLogs'));

    }
}
