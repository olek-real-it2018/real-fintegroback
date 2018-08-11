<?php

namespace App\Http\Controllers;

use App\Http\Model\FintUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InUserController extends Controller {




    // if($inTable['user_id'] === $inTable['user_id']){
    //    	  return('<script type="text/javascript">alert("Вы авторизованный пользователь")</script>');
    //    }
        

    
    public function takeMessage(Request $request){
             
            $messageModel = new FintUser();
            $messages = $messageModel->getAllMessage();

             return view('inpage')->with([
                    'messages'=> $messages
        ]);
   }

    /**
     * @param Request $request
     */
//    public function taskHandler(Request $request){
//
//
//      $name = $request->input('name');
//      $code = $request->input('code');
//      $result = $request->session()->all();
//
//      $formsend = DB::create('insert into tasks (`id`, `name`, `code`) values (?, ?, ?)',$result);
      // $taskModel = new FintUser();
      // $taskFromModel = $taskModel->sendFormDB();



  // }


//     public function showMessage(){

//         $result = '<h3>* Lorem text *</h3>';
//         $messages = DB::select('select * from message where user_id = ?', [15]);
// //var_dump($messages); exit;
// $fintController = new FintController();//Экземпляр класса - объект
// $testForm = $fintController->testForm(25); //Получаем метод Вычисление методом тестФорм
//     	$resulTable =[
//     	0 => 'Message1',
//     	1 => 'Message2',
//     	2 => 'Message3'
//     	];
    	
//     	return view('inpage')->with([
//     		'resulTable'=> $resulTable,
//             'result'=> $result,
//             'messages'=> $messages,
//             'testForm' => $testForm
//     		]);
//     }

     public function inputName(Request $request)
     {   
        $name = $request->input('name');
        $code = $request->input('code');

        $result = $request->session()->all();
        print_r($request->all());
         return view('test')->with([
    		    'name'=> $name,
            'code'=> $code,
            //'messages'=> $messages
    		]);
              echo $name .'</br>';
              echo $code; 
        
        

      //    $result = $request->session()->all();//получаем данные из сессии
	     // $token = $result['_token'];
      //     return view('test',['token'=>$token]); //передаём данные в шаблон
        
     }
}

