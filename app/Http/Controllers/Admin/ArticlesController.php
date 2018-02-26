<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Article;
use App\Entities\Category;
use App\Entities\CategoryArticle;
use App\Entities\Tag;
use App\Entities\TagArticle;
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

        $objTag = new Tag();
        $tags = $objTag ->get();
        return view('admin.articles.add',['categories'=>$categories,
                                                'tags'=>$tags]);
    }
//====================================================================================================================//
    public function addRequestArticle(ArticleRequest $request)
    {
        $objArticle = new Article();
        $objCategoryArticle = new CategoryArticle();
        $objTagArticle = new TagArticle();

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
            foreach ($request->input('categories') as $category_id) {
                $category_id = (int)$category_id;
                $objCategoryArticle = $objCategoryArticle->create([
                    'category_id' => $category_id,
                    'article_id' => $objArticle->id
                ]);
            }
            foreach ($request->input('tags') as $tag_id){
                $tag_id = (int)$tag_id;
                $objTagArticle = $objTagArticle->create([
                    'tag_id'         =>  $tag_id,
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

        $objTag = new Tag();
        $tags = $objTag ->get();


        $objArticle = Article::find($id);
        if(!$objArticle){
            return abort('404');
        }

        $mainCategories = $objArticle -> categories;
        $mainTags = $objArticle -> tags;
        $arrCategories = [];
        $arrTags = [];
        foreach($mainCategories as $category){
            $arrCategories[] = $category->id;
        }
        foreach($mainTags as $tag){
            $arrTags[] = $tag->id;
        }

//        dd($arrCategories);

        return view('admin.articles.edit',[
            'categories'      => $categories,
            'article'         => $objArticle,
            'arrCategories'   => $arrCategories,
            'tags'            => $tags,
            'arrTags'         => $arrTags
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
            $objArticleTag = new TagArticle();

            $objArticleCategory->where('article_id',$objArticle->id)->delete();   //видаляємо всі записи в таблиці category_articles в яких article_id збігається із id статі яку ми редагуєм
            $objArticleTag->where('article_id',$objArticle->id)->delete();   //видаляємо всі записи в таблиці category_articles в яких article_id збігається із id статі яку ми редагуєм

            $arrCategories = $request->input('categories');   //отримуємо масив всіх категорій 'categories' з edit.blade.php
            $arrTags = $request->input('tags');   //отримуємо масив всіх категорій 'categories' з edit.blade.php


            if(is_array($arrCategories)){                          // перевірка чи то масив
                foreach ($arrCategories as $category){
                    $objArticleCategory->create([
                        'category_id' => $category,
                        'article_id'  => $objArticle->id
                    ]);
                }
            }
            if(is_array($arrTags)){                          // перевірка чи то масив
                foreach ($arrTags as $tag){
                    $objArticleTag->create([
                        'tag_id' => $tag,
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

        if($request->ajax()) {
            $id = (int)$request->input('id');

            $objArticle = new Article();
            $objArticleCategory = new CategoryArticle();
            $objArticleTag = new TagArticle();

            $objArticlefind = Article::find($id);
            if(!$objArticlefind){
                return abort('404');
            }

            $objArticle->where('id', $id)->delete();
            $objArticleCategory->where('article_id',$objArticlefind->id)->delete();   //видаляємо всі записи в таблиці category_articles в яких article_id збігається із id статі яку ми редагуєм
            $objArticleTag->where('article_id',$objArticlefind->id)->delete();

            echo "success";
        }

    }
//====================================================================================================================//
}
