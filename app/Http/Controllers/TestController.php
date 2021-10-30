<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $item = [
            'content' => '自由に入力して下さい',
        ];
        return view('index' , $item);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $item = [
            'content' => $content . 'を受け付けました。'
        ];
        return view('index', $item);
    }
}
