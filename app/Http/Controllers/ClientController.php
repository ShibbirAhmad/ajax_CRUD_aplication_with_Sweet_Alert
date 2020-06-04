<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function home() {
        
           return view('ajax_home');
    }


    public function index() {
        
        return view('ajax_crud');
    }

    public function getClient() {

         return Client::all();
    }


    public function addClient(Request $request){

          Client::create($request->all() ); 
          
          return [ 'success' => true, 'message' => ' New Client Added Successfully '] ;
    }


    public function updateClient(Request $request){

        
           if ($request->has('id') ) {
               Client::find($request->input('id') )->update($request->all() );
               return [ 'success' => true, 'message' => ' Client info. updated Successfully '] ;  
           }
           
    }



    public function deleteClient($id){

        if ($request->has('id') ) {
            Client::find($request->input('id') )->delete();
            return [ 'success' => true, 'message' => 'Deleted one  Client  '] ;  
        }

    }





}

?>