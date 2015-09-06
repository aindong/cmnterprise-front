<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Session;

class RegistrantsController extends Controller
{

    public function __construct()
    {
        @session_start();
        if (isset($_SESSION['user']) && $_SESSION['user'] == 'valid') {
            return view('admin.dashboard');
        }
    }

    public function index()
    {
        $users = User::with(['userEvents' => function($query) {
                $query->where('event_id', 1);
            }])
            ->with(['userTransactions' => function($query) {
                $query->where('event_id', 1);
            }])
            ->has('userEvents')
            ->has('userTransactions')
            ->get();

        return view('admin.users')->with('users', $users);
    }
}
