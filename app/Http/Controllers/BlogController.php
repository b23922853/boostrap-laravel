<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // 讀取資料的總頁面通常會叫 index / list 
    public function index(){

        $articles =  DB::table('articles')->get();
        return view('backstage.blog.blog', compact('articles'));
    }

    public function create(){

        return view('backstage.blog.blog-create');
    }


    public function store(Request $request){



        // 藉由model操作資料庫
        Article::create([
            "title" => $request->title,
            "content" => $request->content,
            "auther" => $request->auther,
        ]);

        // 如果表單的資料與request完全相符, 可以用insert($request->all()) 直接建立
        // DB::table('articles')->insert($request->all()); 

        // 直接使用DB操作資料庫
        // DB::table('articles')->insert([
        //     "title" => $request->title,
        //     "content" => $request->content,
        //     "auther" => $request->auther,
        //     "created_at" =>  \Carbon\Carbon::now(), 
        //     "updated_at" => \Carbon\Carbon::now(),
        // ]); 


        // 第一種作法 return view , 但是因為沒有更新狀態(網址還是store) 所以F5會再度送出表單
        // $articles =  DB::table('articles')->get();
        // return view('blog',compact('articles'));

        
        // 第二種作法 return redirect, 是藉由重新導向(代替你key網址到指定的頁面) 
        // 因為已經重新導向了 案F5不會再度送出表單
        return redirect('/blog');

    }

    public function edit($id){
        
        //找到我要編輯的那一個文章
        $article = Article::find($id);

        return view('backstage.blog.blog-edit', compact('article'));
    }

    public function update($id, Request $request){
        
        // 第一個寫法, 使用query builder
        // Article::find($id)->update([
        //     "title" => $request->title,
        //     "content" => $request->content,
        //     "auther" => $request->auther,
        // ]);

        // 第二種寫法, 使用orm
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->auther = $request->auther;
        $article->save();
        return redirect('/blog');
    }

    public function delete($id){
        //進行刪除
        //第一個寫法, 使用query builder
        Article::find($id)->delete();

        // 第二種寫法, 使用orm
        // $article = Article::find($id);
        // $article->delete();

        //刪除完回到blog的列表
        return redirect('/blog');
    }
}
