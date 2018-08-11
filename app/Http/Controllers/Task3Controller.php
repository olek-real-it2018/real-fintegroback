<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Model\Task3User;
use Illuminate\Http\Request;



class Task3Controller extends Controller {

     public function index(){
 
       return view('task3in');
 }



	 public function getData(Request $request)
     {   
        $name = $request->input('name');
        $code = $request->input('code');
        $result = $request->session()->all();

            $userModel = new Task3User();
            $data = $userModel->getInfoUser();


        // $result = $request->session()->all();
        // print_r($request->all());
         return view('task3out')->with([
            'data'=> $data     //key = value
            
        ]);
      
}
    public function ragistration(Request $request)
    {


     return response()->json([

        'id' => '12'

        ]);
    }

}

