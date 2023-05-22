<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report\Category;
use App\Models\Transaction\Transaction;
use Illuminate\Support\Facades\Mail;
use App\Models\Report\Report;
use App\Mail\TransactionMail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Validator;

class PayPalController extends Controller
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {  
        // dd($request->all());
        $user_type = $request['user_type'];
        // dd($request->parameter);
        $categories = Category::all();
        $report = Report::where('slug', $request['reportSlug'])->first();
        return view('checkout', compact('categories', 'report', 'user_type'));
    }
    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request)
    {
        $validator = $request->validate([
            'fname'=>'required',
            'email' => 'required|email|max:255',
            'contact_no' => 'required',
            // 'phone' => 'nullable|regex:^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$^',
            'company_name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required|regex:/\b\d{6}\b/',
            'country' => 'required|not_in:0',
            'pay_method' => 'required',
        ]);

        // dd($request->all());
            
        
            if($request->pay_method === 'wiretransfer'){
                
                $transactions = new Transaction;
                $transactions->fname = $request->input('fname');
                $transactions->email = $request->input('email');
                $transactions->contact_no = $request->input('contact_no');
                $transactions->company_name = $request->input('company_name');
                $transactions->city = $request->input('city');
                $transactions->zip_code = $request->input('zip_code');
                $transactions->country = $request->input('country');
                $transactions->state = $request->input('state');
                $transactions->pay_method = $request->input('pay_method');
                $transactions->status = "Pending";
                $transactions->user_type = $request->input('user_type');
                $transactions->report_id= $request->input('report_id');
                $transactions->save();
                
                
                $categories = Category::all();
                $transaction = Transaction::latest()->first();
                Mail::to($request->email)->send(new TransactionMail($transaction));
                //  return 'Message sent Successfully';
                return view('wireTransactionThanks', compact('categories'));
            }
            else if($request->pay_method === 'paypal'){
                  $provider = new PayPalClient;
                  $provider->setApiCredentials(config('paypal'));
                  $paypalToken = $provider->getAccessToken();
                  $response = $provider->createOrder([
                      "intent" => "CAPTURE",
                      "application_context" => [
                          "return_url" => route('successTransaction'),
                          "cancel_url" => route('cancelTransaction'),
                      ],
                      "purchase_units" => [
                          0 => [
                              "amount" => [
                                  "currency_code" => "USD",
                                  "value" => "1000.00"
                              ]
                          ]
                      ]
                  ]);
                  if (isset($response['id']) && $response['id'] != null) {            // redirect to approve href
                      foreach ($response['links'] as $links) {
                          if ($links['rel'] == 'approve') {
                              return redirect()->away($links['href']);
                          }
                      }
                      return redirect()
                          ->route('checkout')
                          ->with('error', 'Something went wrong.');
                  } else {
                      return redirect()
                          ->route('checkout')
                          ->with('error', $response['message'] ?? 'Something went wrong.');
                  }
                  }
        
    }

    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('checkout')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('checkout')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('checkout')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}