<?php
namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Models\UserTransaction;
use Illuminate\Http\Request;
use Log;

class PaymentsController extends Controller
{
    protected $transactURL    = 'http://testpay.7-eleven.com.ph:8888/transact';
    protected $inquireURL     = 'http:// testpay.7-eleven.com.ph:8888/inquire';
    protected $transactionKey = 'fc9c9d077b2bb26d559dab5df8a457703ce14d894dc0ffb2dee7bf6dfaaff1f6';
    protected $merchantID     = 'shimano_test';

    public function postback(Request $request)
    {
        $input = $request->all();

        $input2 = json_encode($input);
        Log::info('7-Connect: '.$input2);

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