<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show(Category $categorie)
    {
        return Category::find($categorie);
    }

    public function store()
    {
        $data = [
            'title'=>'asdWW',
            'description'=>'asdWW',
        ];
        $role = Category::create($data);
        return $role;
    }

    public function update(Category $categorie)
    {
        $data = [
            'title' => 'qweqwe'
        ];
        $categorie->update($data);
        return $categorie;
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return dd(111);
    }
}
