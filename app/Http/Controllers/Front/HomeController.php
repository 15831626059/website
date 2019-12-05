<?php

namespace App\Http\Controllers\Front;

use App\Model\Admin\Entity;
use App\Model\Front\Article;
use App\Repository\Admin\ContentRepository;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index(Request $request)
    {
        $page = $request['page'];
        if(empty($page)){
            $page = 1;
        }
        $article = Article::paginate(5);
        return view('front.index',['article'=>$article]);
    }
    public function mindex()
    {
        return view('front.m.index');
    }

    public function enter()
    {
        return view('front.enter');
    }
    public function menter()
    {
        return view('front.m.enter');
    }


    public function article(Request $request)
    {
        $page = $request['page'];
        if(empty($page)){
            $page = 1;
        }
        $article = Article::paginate(5);
        return view('front.article',['article'=>$article,'page'=>$page]);
    }
    public function detail($id)
    {
        $article = Article::findOrFail($id);
        return view('front.detail',['article'=>$article]);
    }
    public function mdetail($id)
    {
        $article = Article::findOrFail($id);
        return view('front.m.detail',['article'=>$article]);
    }
    public function marticle(Request $request)
    {
        $page = $request['page'];
        if(empty($page)){
            $page = 1;
        }
        $article = Article::paginate(5);
        return view('front.m.article',['article'=>$article,'page'=>$page]);
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        return view('front.m.about');
    }

    public function service()
    {
        return view('front.service');
    }

    public function mservice()
    {
        return view('front.m.service');
    }
    public function faq()
    {
        return view('front.question');
    }
    public function xuqiu()
    {
        return view('front.xuqiu');
    }
}
