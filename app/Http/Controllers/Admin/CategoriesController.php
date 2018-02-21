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
        $objCategory = new Category();
        $categories = $objCategory->get();
        return view('admin.categories.index', ['categories' => $categories]);
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
        $category = Category::find($id);

        if(!$category){                     //перевірка чи існує категорія (якщо ні то 404 сторінка
            return abort(404);
        }

        return view('admin.categories.edit',['category' => $category]);

    }

//====================================================================================================================//
//обробник події на кнопку edit
    public function editRequestCategory(Request $request,int $id)
    {
        try {
            $this->validate($request,[
                'title' => 'required|string|min:4|max:25',
                'description' => 'required'
            ]);
            $objCategory = Category::find($id);
            if(!$objCategory){
                return abort(404);
            }
            $objCategory ->title = $request->input('title');
            $objCategory ->description = $request->input('description');

            if($objCategory->save()){
                return redirect()->route('categories')->with('success','Категорія успішно відредагована');
            }
            return back()->with('error','Не вдалося відредагувати категорію');
//            dd($request->all());
        }catch(ValidationException $e){
            \Log::error($e->getMessage());                                         //для адміністратора сайту
            return back()->with('error', $e->getMessage());
        }
    }
//====================================================================================================================//
    public function deleteCategory(Request $request)
    {
        if($request->ajax()){

        }

    }
//====================================================================================================================//
}
