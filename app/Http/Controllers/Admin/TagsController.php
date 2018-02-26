<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class TagsController extends Controller
{
    //====================================================================================================================//
    public function index()
    {
        $objTag = new Tag();
        $tags = $objTag->get();
        return view('admin.tags.index',['tags' => $tags]);
    }
//====================================================================================================================//
    public function addTag()
    {
        return view('admin.tags.add');
    }
//====================================================================================================================//
    public function addRequestTag(Request  $request)
    {

        try {
            $this->validate($request,[
                'title' => 'required|string|min:2|max:25',
                'description' => 'required'
            ]);
            $objTag = new Tag();
            $objTag = $objTag->create([
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]);
            if($objTag){
                return redirect()->route('tags')->with('success','Тег успішно добавлена');
            }
            return back()->with('error','Не вдалося добавити тег');
//            dd($request->all());
        }catch(ValidationException $e){
            \Log::error($e->getMessage());                                         //для адміністратора сайту
            return back()->with('error', $e->getMessage());
        }


    }
//====================================================================================================================//
    public function editTag(int $id)
    {
        $tag = Tag::find($id);

        if(!$tag){                     //перевірка чи існує категорія (якщо ні то 404 сторінка
            return abort(404);
        }

        return view('admin.tags.edit',['tag' => $tag]);
    }

//====================================================================================================================//
//обробник події на кнопку edit
    public function editRequestTag(Request  $request,int $id)
    {
        try {
            $this->validate($request,[
                'title' => 'required|string|min:2|max:25',
                'description' => 'required'
            ]);
            $objTag = Tag::find($id);
            if(!$objTag){
                return abort(404);
            }
            $objTag ->title = $request->input('title');
            $objTag ->description = $request->input('description');

            if($objTag->save()){
                return redirect()->route('tags')->with('success','Тег успішно відредаговано');
            }
            return back()->with('error','Не вдалося відредагувати тег');
//            dd($request->all());
        }catch(ValidationException $e){
            \Log::error($e->getMessage());                                         //для адміністратора сайту
            return back()->with('error', $e->getMessage());
        }

    }
//====================================================================================================================//
    public function deleteTag(Request  $request)
    {

        if($request->ajax()){
            $id = (int)$request->input('id');
            $objTag = new Tag();

            $objTag->where('id',$id)->delete();

            echo "success";
        }
    }
//====================================================================================================================//
}
