<?php
namespace App\Http\Api\Users\Services;

use App\Http\Api\Events\Services\EventRegistration;

class UserRegistration
{
    protected $eventRegistration;

    public function __construct()
    {
        $this->eventRegistration = new EventRegistration();
    }

    public function register($input)
    {
        return 'register';
    }

    public function joinEvent($input)
    {

    }
}