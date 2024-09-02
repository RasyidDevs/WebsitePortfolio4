<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class indexController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->orderBy("id","asc")->get();
        $skills = DB::table('skill')->orderBy("id","asc")->simplePaginate(4);
        $comments = DB::table('comments')->orderBy("id","desc")->simplePaginate(4);
        return view("index" ,compact("categories","skills","comments"));
    }
}
