<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Report\Category;
use App\Models\Report\Report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        $categories = Category::all();
        return view('about_us', compact('categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function caseStudy()
    {
        $categories = Category::all();
        return view('case_study', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $categories = Category::all();
        return view('news', compact('categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        $categories = Category::all();
        return view('contact_us', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function latestReport()
    {
        $categories = Category::all();
        $reports = Report::paginate(10);
        return view('latest_report', compact('categories', 'reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportDescription($id)
    {
        $categories = Category::all();
        $report = Report::find($id);
        return view('reportDescription', compact('categories', 'report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reports($id)
    {
        $categories = Category::all();
        $reports = Report::where('category_id', $id)->paginate(10);
        return view('reports', compact('categories', 'reports'));
    }
}
