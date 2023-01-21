<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Models\Report\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.Category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        if ($request->file('image')) {
            $imageOne = time().'.'.$request->file('image')->getClientOriginalName();
            $imageOneStore = $request->file('image')->store('public/category_image');

            $imageOnePath = str_replace('public/', '', $imageOneStore);
        }

        $data = [
            'name' => $request->name ?? '',
            'title' => $request->title ?? '',
            'show_on_homepage' => $request->show_on_homepage ?? '',
            'image' => $imageOnePath ?? '',
            'title_tag' => $request->title_tag ?? '',
            'slug' => $request->slug ?? '',
            'meta_keywords' => $request->meta_keywords ?? '',
            'category_icon' => $request->category_icon ?? '',
        ];
        Category::create($data);
        $request->session()->flash('message', 'Category Created.');
        return redirect()->route('category.index');
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
    public function edit(Request $request, Category $category)
    {
        return view('admin.Category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if ($request->file('image')) {
            $imageOne = time().'.'.$request->file('image')->getClientOriginalName();
            $imageOneStore = $request->file('image')->store('public/category_image');
            $imageOnePath = str_replace('public/', '', $imageOneStore);
        }

        $data = [
            'name' => $request->name ?? '',
            'title' => $request->title ?? '',
            'show_on_homepage' => $request->show_on_homepage ?? '',
            'image' => $imageOnePath ?? '',
            'title_tag' => $request->title_tag ?? '',
            'slug' => $request->slug ?? '',
            'meta_keywords' => $request->meta_keywords ?? '',
            'category_icon' => $request->category_icon ?? '',
        ];

        if ($category->update($data)) {
            $request->session()->flash('message', 'Category Updated.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        if ($category->delete()) {
            $request->session()->flash('message', 'Category Deleted.');
        } else {
            $request->session()->flash('error', 'Something Went Wrong.');
        }
        return redirect()->route('category.index');
    }
}
