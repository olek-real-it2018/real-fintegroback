<?php

//namespace App;
namespace App\Http\Model;
//namespace Illuminate\Database\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FintUser extends Model
{
	protected $table ='message';

    public function insertMessage()
    {

        $inTable = [
            'date' => '2018-08-08',
            'message' => 'Amigos parasientos!',
            'user_id' => '18'
        ];

        $totable = DB::create('insert into message (`date`, `message`, `user_id`) values (?, ?, ?)', $inTable);
// ['2018-08-08', 'Hello user', '16']
    }

    public function sendFormDB(Request $request){
    
    }


    public function getAllMessage(){

    	$messages = DB::table($this->table)->get();
    	dump($this->table);
    	 return $messages;
    }

}
