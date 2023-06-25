<?php

namespace App\Http\Controllers\CaseStudy;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caseStudies = CaseStudy::all();
        return view('admin.CaseStudy.list', compact('caseStudies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CaseStudy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image_one')) {
            $imageOne = time().'.'.$request->file('image_one')->getClientOriginalName();
            $imageOneStore = $request->file('image_one')->store('public/case_study_images');
            $imageOnePath = str_replace('public/', '', $imageOneStore);
        }
        if ($request->file('image_two')) {
            $imageTwo = time().'.'.$request->file('image_two')->getClientOriginalName();
            $imageTwoStore = $request->file('image_two')->store('public/case_study_images');
            $imageTwoPath = str_replace('public/', '', $imageTwoStore);
        }
        if ($request->file('image_three')) {
            $imageThree = time().'.'.$request->file('image_three')->getClientOriginalName();
            $imageThreeStore = $request->file('image_three')->store('public/case_study_images');
            $imageThreePath = str_replace('public/', '', $imageThreeStore);
        }
        $data = [
            'title' => $request->title ?? '',
            'description_one' => $request->description_one ?? '',
            'image_one' => $imageOnePath ?? '',
            'description_two' => $request->description_two ?? '',
            'image_two' => $imageTwoPath ?? '',
            'description_three' => $request->description_three ?? '',
            'image_three' => $imageThreePath ?? '',
            'slug' => $request->slug ?? '',
        ];
        if (CaseStudy::create($data)) {
            $request->session()->flash('message', 'Case Study Created.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('casestudy.index');
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
    public function edit($id)
    {
        $caseStudy = CaseStudy::where('id', $id)->first();
        return view('admin.CaseStudy.edit', compact('caseStudy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $caseStudy = CaseStudy::find($id);
        if ($request->file('image_one')) {
            $imageOne = time().'.'.$request->file('image_one')->getClientOriginalName();
            $imageOneStore = $request->file('image_one')->store('case_study_images');
            $imageOnePath =$imageOneStore;
        }
        if ($request->file('image_two')) {
            $imageTwo = time().'.'.$request->file('image_two')->getClientOriginalName();
            $imageTwoStore = $request->file('image_two')->store('case_study_images');
            $imageTwoPath =$imageTwoStore;
        }
        if ($request->file('image_three')) {
            $imageThree = time().'.'.$request->file('image_three')->getClientOriginalName();
            $imageThreeStore = $request->file('image_three')->store('case_study_images');
            $imageThreePath =$imageThreeStore;
        }
        $data = [
            'title' => $request->title ?? '',
            'description_one' => $request->description_one ?? '',
            'image_one' => $imageOnePath ?? '',
            'description_two' => $request->description_two ?? '',
            'image_two' => $imageTwoPath ?? '',
            'description_three' => $request->description_three ?? '',
            'image_three' => $imageThreePath ?? '',
            'slug' => $request->slug ?? '',
        ];
        if ($caseStudy->update($data)) {
            $request->session()->flash('message', 'Case Study Updated.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('casestudy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $caseStudy = CaseStudy::find($id);
        if ($caseStudy->delete()) {
            $request->session()->flash('message', 'Case Study Deleted.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('casestudy.index');
    }
}
