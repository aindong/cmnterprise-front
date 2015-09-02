<?php
namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class PaymentsController extends Controller
{
    public function postback(Request $request)
    {
        $input = $request->all();

        $input = json_encode($input);
        Log::info('7-Connect: '.$input);

        $response = [
            'message'   => 'success',
            'status'    => 200
        ];

        return response()->json($response, 200);
    }
}