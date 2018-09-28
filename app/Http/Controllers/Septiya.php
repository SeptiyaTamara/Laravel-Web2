<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Septiya extends Controller{
    //
	public function index(){
		//code
		return view('index');
		
	}
	
	public function create(){
		return view('halamandua');
	}
	
	function tambah(){
		return view('halamantiga');
	}
}
