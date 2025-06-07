<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learninglog;
use App\Models\User;

class DashboardController extends Controller
{
     public function index()
    {
        $learningLogs = Learninglog::where('user_id', auth()->id())->latest()->get();
        $user = User::where('id', auth()->id())->firstOrFail();
        return view('dashboard.index', compact('learningLogs', 'user'));
    }
}
