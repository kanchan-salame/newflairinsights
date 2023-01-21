<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy\CaseStudy;
use App\Models\News\News;
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
        $caseStudies = CaseStudy::paginate(10);
        return view('case_study', compact('categories', 'caseStudies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $categories = Category::all();
        $blogs = News::paginate(10);
        return view('news', compact('categories', 'blogs'));
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
    public function reportDescription($slug)
    {
        $categories = Category::all();
        $report = Report::where('slug', $slug)->first();
        return view('reportDescription', compact('categories', 'report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reports($slug)
    {
        $categories = Category::all();
        $categoyData = Category::where('slug', $slug)->first();
        $reports = Report::where('category_id', $categoyData->id)->paginate(10);
        return view('reports', compact('categories', 'reports', 'categoyData'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        $categories = Category::all();
        return view('faq', compact('categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacyPolicy()
    {
        $categories = Category::all();
        return view('privacy_policy', compact('categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function termOfServices()
    {
        $categories = Category::all();
        return view('term_of_services', compact('categories'));
    }

    public function blogDetail($slug)
    {
        $categories = Category::all();
        $blog = News::where('slug', $slug)->first();
        return view('blogDetail', compact('categories', 'blog'));
    }

    public function caseStudyDetail($slug)
    {
        $categories = Category::all();
        $caseStudy = CaseStudy::where('slug', $slug)->first();
        return view('caseStudyDetail', compact('categories', 'caseStudy'));
    }
}
