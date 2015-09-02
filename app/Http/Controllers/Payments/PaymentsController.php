<?php
namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Models\UserTransaction;
use Illuminate\Http\Request;
use Log;

class PaymentsController extends Controller
{
    protected $transactURL    = 'https://pay.7-eleven.com.ph/transact';
    protected $inquireURL     = 'https://pay.7-eleven.com.ph/inquire';
    protected $transactionKey = '46b67a162275d93b09d3320a1a9ba7a8125cfb804b2f50052ea8f61ccff642d3';
    protected $merchantID     = 'shimano';

    public function postback(Request $request)
    {
        $input = $request->all();

        $input2 = json_encode($input);
        Log::info('7-Connect: '.$input2);
        Log::info('7-Connect-type: ' . $input['type']);
        Log::info('7-Connect-merchant-ref: ' . $input['merchantRef']);

        echo $this->checkData($input);
    }

    public function checkData($input)
    {
        $validtoken = sha1($input['type'] . $this->merchantID . $input['merchantRef'] . '{' . $this->transactionKey . '}');

        if ($input['token'] != $validtoken) {
            $authCode = '';
            $responseCode = "DECLINED";
            $responseDesc = "Invalid token";
        } else {
            $authCode = '1111';
            $responseCode = "SUCCESS";
            $responseDesc = "";

            switch($input['type']) {
                case "VALIDATE":
                    // Check if merchantRef is still valid
                    Log::info('7-Connect-Validate: validating '.$input['merchantRef']);

                    break;
                case "CONFIRM":
                    // Update the paid status of the table
                    $data = [
                        'payment_reference'  => $input['sevenConnectId'],
                        'transaction_data'   => serialize($input),
                        'status'             => 'posted'
                    ];

                    $transaction = UserTransaction::where('transaction_no', $input['merchantRef'])
                        ->update($data);

                    Log::info('7-Connect-Validate: confirmed '.$input['merchantRef']);

                    break;
                default:
                    $responseCode = "DECLINED";
                    $responseDesc = "Unknown transaction type";
            }
        }

        $token = sha1($input['type'] . $this->merchantID . $input['merchantRef'] . $authCode . $responseCode . '{' . $this->transactionKey . '}');

        //set GET variables
        $fields = array(
            'merchantID'    => $this->merchantID,
            'merchantRef'   => $input['merchantRef'],
            'amount'        => $input['amount'],
            'authCode'      => $authCode,
            'responseCode'  => $responseCode,
            'responseDesc'  => $responseDesc,
            'token'         => $token
        );

        $params = http_build_query($fields);

        //output response
        return "?$params";
    }

    public function confirm()
    {

    }
}