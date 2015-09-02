<?php
namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function postback(Request $request)
    {
        $input = $request->all();

        \Log::info('7-Connect: '.$input);
    }
}