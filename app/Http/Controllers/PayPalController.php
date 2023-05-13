<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report\Category;
use App\Models\Report\Report;
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
        $validator = Validator::make($request->all(),[
            'fname'=>'required |string|max:70',
            'email' => 'required|email|max:255',
            // 'phone' => 'nullable|regex:^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$^',
            'company' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'zipcode' => 'required|regex:/\b\d{5}\b/',
            'country' => 'regex:/^\+\d{1,3}$/',
            'pay_method' => 'required',
        ]);
             
            // Contact::create($request->all());
            // $contact = Contact::latest()->first();
            // Mail::to($request->email)->send(new ContactMail($contact));
            // return 'Message sent Successfully';
        
            if($request->pay_method === 'wiretransfer'){
                $categories = Category::all();
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
              
       
        

        // $ = new Contact;
        // $contact->fullName = $request->fullName;
        // $contact->email = $request->email;
        // $contact->phoneNumber = $request->phoneNumber;
        // $contact->message = $request->message;
        // $contact->save();
        
        // return redirect('/contact')->with('status', 'Thanks for contacting me. I\'ll be in touch soon!');

        
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