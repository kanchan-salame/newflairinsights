<?php

namespace App\Http\Controllers;

use App\Models\Report_request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storereport_requestRequest;
use App\Http\Requests\Updatereport_requestRequest;
use Illuminate\Support\Facades\Mail;
use App\Models\Report\Report;
use Illuminate\Http\Request;

use App\Mail\ReportRequestMail;
use Validator;

class ReportRequestController extends Controller
{  
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storereport_requestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storereport_requestRequest $request)
    {
        // dd($request->subject);
        $validator = $request->validate([
            'fname'=>'required',
            'email' => 'required|email|max:255',
            'contact_no' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'requirements' => 'required',
            'designation' => 'required',         
        ]);
        Report_request::create($request->all());
        $reportRequest = Report_request::latest()->first();
        // dd($reportRequest->report);
        Mail::to($request->email)->send(new ReportRequestMail($reportRequest));
        $redirectRoute = $request->subject == "Asking for Discount" ? 'askForDiscount' : 'rquestSample';
        // dd($request);
        return redirect()->route($redirectRoute, $reportRequest->report->slug)->with('success','Message sent Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report_request  $report_request
     * @return \Illuminate\Http\Response
     */
    public function show(Report_request $report_request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report_request  $report_request
     * @return \Illuminate\Http\Response
     */
    public function edit(Report_request $report_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatereport_requestRequest  $request
     * @param  \App\Models\Report_request  $report_request
     * @return \Illuminate\Http\Response
     */
    public function update(Updatereport_requestRequest $request, Report_request $report_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report_request  $report_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report_request $report_request)
    {
        //
    }
}
