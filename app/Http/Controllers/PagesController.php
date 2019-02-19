<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function abouts()
   {
	   /*$title="jeslin";
	   return view('pages.form')->with('name',compact($title)*/
		return view('pages.abouts');
}
 public function index()
   {
	   
		return view('pages.index');
}
 public function services()
   {
	   
	    
		return view('pages.services');
}
}