<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Http\Requests\Report\StoreReportRequest;
use App\Models\Report\Category;
use App\Models\Report\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ReportImport;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('hi');
        $reports = Report::paginate();
        // dd($reports);
        return view('admin.Report.list', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.Report.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        if ($request->file('image_one')) {
            $imageOne = time().'.'.$request->file('image_one')->getClientOriginalName();
            $imageOnePath = $request->file('image_one')->store('public/report_image');
            // dd($imageOnePath);
            $request['image_one'] = $imageOnePath;
        }
        if ($request->file('image_two')) {
            $imageTwo = time().'.'.$request->file('image_two')->getClientOriginalName();
            $imageTwoPath = $request->file('image_two')->store('public/report_image');
            $request['image_two'] = $imageTwoPath;
        }
        if ($request->file('image_three')) {
            $imageThree = time().'.'.$request->file('image_three')->getClientOriginalName();
            $imageThreePath = $request->file('image_three')->store('public/report_image');
            $request['image_three'] = $imageThreePath;
        }
        $data = [
            'category_id' => $request->category_id ?? '',
            'publisher_id' => $request->publisher_id ?? '',
            'delivery_format_id' => $request->delivery_format_id ?? '',
            'title' => $request->title ?? '',
            'show_on_homepage' => $request->show_on_homepage ?? '',
            'pages' => $request->pages ?? '',
            'description_one' => $request->description_one ?? '',
            'image_one' => $imageOnePath ?? '',
            'description_two' => $request->description_two ?? '',
            'image_two' => $imageTwoPath ?? '',
            'description_three' => $request->description_three ?? '',
            'image_three' => $imageThreePath ?? '',
            'content' => $request->content ?? '',
            'list_of_figures' => $request->list_of_figures ?? '',
            'single_user_price' => $request->single_user_price ?? '',
            'multi_user_price' => $request->multi_user_price ?? '',
            'corp_user_price' => $request->corp_user_price ?? '',
            'meta_title' => $request->meta_title ?? '',
            'site_pdf' => $request->site_pdf ?? '',
            'meta_description' => $request->meta_description ?? '',
            'meta_keywords' => $request->meta_keywords ?? '',
        ];
        if (Report::create($data)) {
            $request->session()->flash('message', 'Report Created.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $categories = Category::all();
        return view('admin.Report.edit', compact('report', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        if ($request->file('image_one')) {
            $imageOne = time().'.'.$request->file('image_one')->getClientOriginalName();
            $imageOneStore = $request->file('image_one')->store('public/report_image');
            $imageOnePath = str_replace('public/', '', $imageOneStore);
        }
        if ($request->file('image_two')) {
            $imageTwo = time().'.'.$request->file('image_two')->getClientOriginalName();
            $imageTwoStore = $request->file('image_two')->store('public/report_image');
            $imageTwoPath = str_replace('public/', '', $imageTwoStore);
        }
        if ($request->file('image_three')) {
            $imageThree = time().'.'.$request->file('image_three')->getClientOriginalName();
            $imageThreeStore = $request->file('image_three')->store('public/report_image');
            $imageThreePath = str_replace('public/', '', $imageThreeStore);
        }

        $data = [
            'category_id' => $request->category_id ?? '',
            'publisher_id' => $request->publisher_id ?? '',
            'delivery_format_id' => $request->delivery_format_id ?? '',
            'title' => $request->title ?? '',
            'show_on_homepage' => $request->show_on_homepage ?? '',
            'pages' => $request->pages ?? '',
            'description_one' => $request->description_one ?? '',
            'image_one' => $imageOnePath ?? '',
            'description_two' => $request->description_two ?? '',
            'image_two' => $imageTwoPath ?? '',
            'description_three' => $request->description_three ?? '',
            'image_three' => $imageThreePath ?? '',
            'content' => $request->content ?? '',
            'list_of_figures' => $request->list_of_figures ?? '',
            'single_user_price' => $request->single_user_price ?? '',
            'multi_user_price' => $request->multi_user_price ?? '',
            'corp_user_price' => $request->corp_user_price ?? '',
            'meta_title' => $request->meta_title ?? '',
            'site_pdf' => $request->site_pdf ?? '',
            'meta_description' => $request->meta_description ?? '',
            'meta_keywords' => $request->meta_keywords ?? '',
        ];

        if ($report->update($data)) {
            $request->session()->flash('message', 'Category Updated.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Report $report)
    {
        if ($report->delete()) {
            $request->session()->flash('message', 'Report Deleted.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('report.index');
    }

    public function import(Request  $request)
    {
        dd('hi');
        $request->validate([
            'reportfile' => 'required|file|mimes:csc',
        ]);
        Excel::import(new ReportImport, $request->file('reportfile'), \Maatwebsite\Excel\Excel::CSV);
        return redirect()->route('report.index')->with('success', 'Rports Imported Successfully');
    }
}
