<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::all())->resolve();
    }

    public function show(Category $category)
    {
        return CategoryResource::make($category)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        dd($data);
//        $category = Category::create($data);
//        return CategoryResource::make($category);
    }

    public function update(UpdateRequest $request,Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return CategoryResource::make($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return 'delete';
    }
}
