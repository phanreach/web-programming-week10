<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index($id){
        return "List of all posts will be here...";
    }

    public function create(){
        return "Create form will be here...";
    }
    public function store(Request $request){

    }

    public function show($id){
        return "Individual post will be here.. Post ID: " . $id;
    }
    public function edit($id){
        return "Edit form will be here... Post ID: " . $id;
    }
    public function update(Request $request, $id){

    }
    public function destroy($id){

    }
    public function test(){
        return view('posts.test' ,
        ['nim'=>'001',
                'nama' => 'John Thor',
                'prodi'=>'informatic'
            ]);
    }
}
