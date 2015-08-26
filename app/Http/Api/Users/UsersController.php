<?php
namespace App\Http\Api\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::all();

        return $user;
    }
}