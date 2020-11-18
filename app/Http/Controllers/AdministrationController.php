<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AdministrationController extends Controller
{
   public function index(Request $request){
        
   	  if($request->isMethod('post')){

            $data = $request->input();
            //dd($request);die();

            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']/*,'role'=>'1'*/])){
 
                Session::put('adminSession',$data['email']);
                return redirect('/administration')->with([
                'data'=>Auth::user()]);
                
            }else{

                return redirect('/')->with("flash_message_error","Email ou Mot de pass Invalide");
            }
        }

   	 return view('welcome');
    } //

   public function admin()
    {  
         if(Session::has('adminSession')){
           return view('administration')->with([
                'data'=>Auth::user()]); 
        }else{

             return redirect('/')->with("flash_message_error","veillez vous conecter d'abord");
          }
        return view('welcome');
  }
}
