<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = News::all();
        return view('admin.News.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.News.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->title ?? '',
            'short_description' => $request->short_description ?? '',
            'long_description' => $request->long_description ?? '',
            'slug' => $request->slug ?? '',
        ];

        if (News::create($data)) {
            $request->session()->flash('message', 'News Created.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('news.index');
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
        $news = News::where('id', $id)->first();
        return view('admin.News.edit', compact('news'));
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
        $news = News::where('id', $id)->first();
        $data = [
            'title' => $request->title ?? '',
            'short_description' => $request->short_description ?? '',
            'long_description' => $request->long_description ?? '',
            'slug' => $request->slug ?? '',
        ];

        if ($news->update($data)) {
            $request->session()->flash('message', 'News Updateds.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $news = News::find($id);
        if ($news->delete()) {
            $request->session()->flash('message', 'News Deleted.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('news.index');
    }
}
