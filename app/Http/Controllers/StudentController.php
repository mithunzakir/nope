<?php

namespace App\Http\Controllers;


use App\Models\Register; 
use Illuminate\Http\Request;

class StudentController extends Controller {
	
	public function std_directory(){
		echo 'I std directory';
	}	

	public function login(){
		return view('login_page');
	}

	public function register(){
		return view('register');
	}

	public function do_register(Request $request){
		
		$register = new Register(); 
		$register->email = $request->email;
		$register->password = md5($request->password);

		$register->save();
		echo 'data saved';
	}

	public function all_users(){

	}

}