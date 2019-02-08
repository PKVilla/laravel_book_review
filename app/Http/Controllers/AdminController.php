<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;


class AdminController extends Controller
{
    public function showDashboard(){
    	$categories = Category::all();
    	return view('admin.admindashboard', compact('categories'));
    }

    public function saveBook(Request $Request){
    	// $rules = array(
    	// 		"title" => "required",
    	// 		"summary" => "required",
    	// 		"category" => "required",
    	// 		"image_cover" => "required|image",
    	// );
    	// $this->validate($Request, $rules);
    	
    	$book = new Book;
    	$book->title = $Request->title;
    	$book->summary = $Request->summary;
    	$book->category_id = $Request->category;

        $book->image_cover = '/images/default.jpg';

    	// $image = $Request->file('image_cover');
    	// $image_name = time().".".$image->getClientOriginalExtension();
    	// $destination = "image/";
    	// $image->move($destination, $image_name);
    	// $book->image_cover = "/".$destination.$image_name;
    	$book->save();
    	// return redirect('/dashboard');
    }
}
	