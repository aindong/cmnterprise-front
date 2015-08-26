<?php
namespace App\Http\Api\Users;

use App\Http\Api\Users\Services\UserRegistration;
use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{

    protected $userRegistration;

    public function __construct()
    {
        $this->userRegistration = new UserRegistration();
    }

    public function index()
    {
        $user = User::all();
        echo $this->userRegistration->register('hello');
        return $user;
    }

    public function getUserById($id)
    {
        $user = User::find($id);

        return $user;
    }

    public function getUserByEmail($email)
    {
        $user = User::where('email', $email)->first();

        return $user;
    }

    public function store()
    {

    }
}