<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Models\Category;

class CateController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add');
    }

    public function store(CateRequest $request)
    {
        $category = new Category();
        $category->name = $request->txtCateName;
        $category->alias = changeTitle($request->txtCateName);
        $category->save();

        return redirect()
                ->route('category.index')
                ->with([
                    'flash_level' => 'success', 
                    'flash_message' => 'Success !! Complete Created Category'
                ]);
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->name = $request->txtCateName;
        $category->alias = changeTitle($request->txtCateName);
        $category->save();

        return redirect()
                ->route('category.index')
                ->with([
                    'flash_level' => 'success',
                    'flash_message' => 'Success !! Complete updated Category !'
                ]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()
        ->route('category.index')
        ->with([
            'flash_level' => 'success',
            'flash_message' => 'Success !! Complete Deleted Category'
         ]);
    }
}

