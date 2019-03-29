<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
    	return view('index.index');
    }

    //
    public function about()
    {
    	return view('index.about');
    }

    //
    public function contact()
    {
    	return view('index.contact');
    }

    //
    // public function news()
    // {
    // 	return view('index.news');
    // }

    // 产品中心
    public function product()
    {
    	return view('index.product');
    }

    // 解决方案
    public function solution()
    {
    	return view('index.solution');
    }

    // 工程案例
    public function engineering()
    {
    	return view('index.engineering');
    }

    //
    // public function rczp()
    // {
    // 	return view('index.rczp');
    // }

    // 下载中心
    public function download()
    {
    	return view('index.download');
    }
}
