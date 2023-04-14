<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Http\Requests\Admin\Categories\StoreRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function create()
    {
        
       return view('admin.categories.create');
    }
    public function store(StoreRequest $request)
    {
        
        $validatedData = $request->validate();
        //dd($validatedData);
        $createdCategory = Category::create([
            // 'title' => $request->title  ,
            // 'slug' => $request->slug
            'title' => $validatedData['title']  ,
            'slug' => $validatedData['slug']
        ]);
        if(!$createdCategory)
        {
            return back()->with('faild','.دسته بندی ایجاد نشد');
        }
        return back()->with('success','.دسته بندی ایجاد شد');
    }
    public function all()
    {
       
        $categories = Category::paginate(10);
        //dd($categories);
        return view('admin.categories.all',compact('categories'));
    }
}