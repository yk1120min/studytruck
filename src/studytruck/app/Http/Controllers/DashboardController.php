<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learninglog;

class DashboardController extends Controller
{
     public function index()
    {
        $learningLogs = Learninglog::where('user_id', auth()->id())->latest()->get();
        return view('dashboard.index', compact('learningLogs'));
    }
}
