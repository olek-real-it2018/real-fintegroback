<?php


namespace App\Http\Model;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task3User extends Model 
{
    protected $table ='user';

    public function getInfoUser()
    {
    
    	$dataUser = DB::table($this->table)->get();

    	 return $dataUser;
    	
    }


    
    
}