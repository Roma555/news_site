<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class CategoriesController extends Controller
{
//====================================================================================================================//
    public function index()
    {
//        $objCategory = new Category();
//        $categories = $objCategory->get();
//        return view('admin.categories.index', ['categories' => $categories]);
    }
//====================================================================================================================//
    public function addCategory()
    {
        return view('admin.categories.add');
    }
//====================================================================================================================//
    public function addRequestCategory(Request $request)
    {
        try {
            $this->validate($request,[
                'title' => 'required|string|min:4|max:25',
                'description' => 'required'
            ]);
            $objCategory = new Category();
            $objCategory = $objCategory->create([
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]);
            if($objCategory){
                return back()->with('success','Категорія успішно добавлена');
            }
            return back()->with('error','Не вдалося добавити категорію');
//            dd($request->all());
        }catch(ValidationException $e){
            \Log::error($e->getMessage());                                         //для адміністратора сайту
            return back()->with('error', $e->getMessage());
        }

    }
//====================================================================================================================//
    public function editCategory(int $id)
    {

    }
//====================================================================================================================//
    public function deleteCategory(Request $request)
    {
        if($request->ajax()){

        }

    }
//====================================================================================================================//
}
