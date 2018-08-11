<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Auth;



class FintController extends Controller
{
    public function index()
    {
      return view('fintegropage');
    }

    public function testForm ($test){
       return $test > 100 ? $test*2 : $test/2;
    	// if($test > 100  $test/2){
    	// 	return $test;
    	// }else($test*2){
    	// 	return $test;
    	// }
    }

	// public function store(Request $request, $users)
	// {
	//     $name = $request->input('name');
	//     $email = $request->input('email');
	//     $password = $request->input('password');
	// }

	//  protected $users;
	//   public function __construct(UserRepository $users)
 //  {
 //    $this->users = $users;
 //  }

 //  public function show($id)
 //  {
 //    $user = $this->users->find($id);

 //    return view('user.profile', ['user' => $user]);
 //  }

 //     public function send(Request $request)
	// {
	//    //$name = $request->input('name');
	//   return view('fintpage2',compact('tasks'));
	    
	// }
}
