<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
// use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class IndexloginController extends Controller
{
    public function userloginer(){
        return view('logins');
    }



    public function showNamePass (Request $flyForm)
    {
    	$name = $flyForm->input('name');
        $pass = $flyForm->input('password');


        $result = $flyForm->session()->all();
         
         $formArr = ['name'=> $name, 'password'=> $pass];
         
         return view('testForm', $formArr);
      //       ->with([
    		// 'name'=> $name,
      //       'password'=> $pass
            
    		// ]);
              echo $name .'</br>';
              echo $pass; 


    }


}