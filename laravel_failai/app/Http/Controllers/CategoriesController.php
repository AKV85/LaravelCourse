<?php

namespace App\Http\Controllers;

use App\Managers\CategoryManager;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function __construct(protected CategoryManager $manager)
    {
    }

    public function index()
    {
        $categories = Category::query()->with(['status','parent'])->get();
        return view('categories.index',['categories'=>Category::orderBy("id")->paginate(6)
        ]);
//        compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        return redirect()->route('categories.show',$category);
    }
    public function show(Category $category)
    {
        return view('categories.show', ['category' => $category]);
    }
    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.show',$category);
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}

