<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Article;
use App\Entities\Category;
use App\Entities\CategoryArticle;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
//====================================================================================================================//
    public function index()
    {
        $objArticle = new Article();
        $articles = $objArticle->get();
        return view('admin.articles.index',['articles' => $articles]);
    }
//====================================================================================================================//
    public function addArticle()
    {
        $objCategory = new Category();
        $categories = $objCategory ->get();
        return view('admin.articles.add',['categories'=>$categories]);
    }
//====================================================================================================================//
    public function addRequestArticle(ArticleRequest $request)
    {
        $objArticle = new Article();
        $objCategoryArticle = new CategoryArticle();

        $full_description = $request->input('full_description') ?? null;
        $keywords = $request->input('keywords') ?? null;                    //++++++++++
        $objArticle = $objArticle->create([
            'title'             => $request->input('title'),
            'short_description' => $request->input('short_description'),
            'full_description'  => $full_description,
            'keywords'          => $keywords,                                     //++++++
            'author'            => $request->input('author')
        ]);


        if($objArticle){
            foreach ($request->input('categories') as $category_id){
                $category_id = (int)$category_id;
                $objCategoryArticle = $objCategoryArticle->create([
                    'category_id'    =>  $category_id,
                    'article_id'     =>  $objArticle->id
                ]);
            }
            return redirect()->route('articles')->with('success','Новина успішно додана');
        }
        return back()->with('error','Невдалося добавити новину');

    }
//====================================================================================================================//
    public function editArticle(int $id)
    {
        $objCategory = new Category();
        $categories = $objCategory ->get();
        $objArticle = Article::find($id);
        if(!$objArticle){
            return abort('404');
        }

        $mainCategories = $objArticle -> categories;
        $arrCategories = [];
        foreach($mainCategories as $category){
            $arrCategories[] = $category->id;
        }
//        dd($arrCategories);

        return view('admin.articles.edit',[
            'categories'      => $categories,
            'article'         => $objArticle,
            'arrCategories'  => $arrCategories
        ]);
    }

//====================================================================================================================//
//обробник події на кнопку edit
    public function editRequestArticle(ArticleRequest $request,int $id)
    {
        $objArticle = Article::find($id);
        if(!$objArticle){
            return abort('404');
        }

        $objArticle->title = $request->input('title');
        $objArticle->short_description = $request->input('short_description');
        $objArticle->full_description = $request->input('full_description');
        $objArticle->author = $request->input('author');
        $objArticle->keywords = $request->input('keywords');

        if($objArticle->save()){
            //Обновляэмо прив'язку категорій
            $objArticleCategory = new CategoryArticle();
            $objArticleCategory->where('article_id',$objArticle->id)->delete();   //видаляємо всі записи в таблиці category_articles в яких article_id збігається із id статі яку ми редагуєм

            $arrCategories = $request->input('categories');   //отримуємо масив всіх категорій 'categories' з edit.blade.php
            if(is_array($arrCategories)){                          // перевірка чи то масив
                foreach ($arrCategories as $category){
                    $objArticleCategory->create([
                        'category_id' => $category,
                        'article_id'  => $objArticle->id
                    ]);
                }
            }
            return redirect()->route('articles')->with('success','Новина успішно відредагована');
        }

        return back()->with('error','Невдалося відредагувати новину');
    }
//====================================================================================================================//
    public function deleteArticle(Request $request)
    {
        if($request->ajax()){
            $id = (int)$request->input('id');
            $objCategory = new Article();

            $objCategory->where('id',$id)->delete();

            echo "success";
        }

    }
//====================================================================================================================//
}
