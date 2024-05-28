<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function insert(Request $request){
        $tableshow=new Users;
        $tableshow->email=$request->email;
        $tableshow->fname=$request->fname;
        $tableshow->tel=$request->tel;
        $tableshow->company=$request->company;
        $tableshow->address=$request->address;

        $tableshow-> save();
        return redirect()->route('fetch');
    }
    public function myuser(){
        $fetch = Users::all();
        return view('tabledata', compact('fetch'));
    }
}
