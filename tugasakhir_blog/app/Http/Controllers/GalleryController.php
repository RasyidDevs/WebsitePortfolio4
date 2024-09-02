<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\categories_gallery;
class GalleryController extends Controller
{
    //
    public function index(){
        $categories = DB::table('categories')->orderBy("id","asc")->get();
        $categories_galleries = DB::table('categories_gallery')->orderBy("id","desc")->get();
        
        return view("galleryPage.index" ,compact("categories","categories_galleries"));
    }
    public function pageByGallery($id){
      
        $categories = DB::table('categories')->orderBy("id","asc")->get();
        $categories_galleries = DB::table('categories_gallery')->orderBy("id","desc")->get();
        $galleryId = categories_gallery::find($id);
        $manyPageGallery = DB::table('page_gallery')
        ->join("categories_gallery", "categories_gallery.id", "=", "page_gallery.gallery_id")
        ->orderBy("page_gallery.created_at", "DESC")
        ->select("page_gallery.images")
        ->where("categories_gallery.id", "=", $id)
        ->simplePaginate(4);
        return view("galleryPage.pageByGallery.index",compact("categories","categories_galleries","manyPageGallery","galleryId"));
    }
}
