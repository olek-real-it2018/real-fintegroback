<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Fasades\DB;
use DB;

class HomeController extends Controller
{
    public function show()
    {
      return view('page');
    }

    public function getMigration(){
    	//$migrat = DB::table('migrations')->get();
         $fgdfg = DB::table('migrations')->select('migration')->get();
    	//dump($migrat);

dump($fgdfg);

$titles = DB::table('migrations')->pluck('migration');

		foreach ($titles as $title) {
		  echo ($title);
		}
		dump($titles);
    }

}
