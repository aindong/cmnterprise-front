<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class DashboardController extends Controller
{

    public function login()
    {
        return view('users.login');
    }

    public function doLogin(Request $request)
    {
        $data = $request->all();

        if (Auth::attempt($data)) {
            @session_start();
            $_SESSION['user'] = 'valid';
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->back()->withInput();
    }

    public function logout()
    {
        @session_start();
        unset($_SESSION['user']);

        return redirect()->to('/');
    }

    public function index()
    {
        @session_start();
        if (isset($_SESSION['user']) && $_SESSION['user'] == 'valid') {
            return view('admin.dashboard');
        }

        return redirect()->to('/login');
    }
}
