<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Validator;

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


     
     //store new client 
    public function addClient(Request $request){

          Client::create($request->all() ); 
          
          return [ 'success' => true, 'message' => ' New Client Added Successfully '] ;
    }




    // update client data 
    public function updateClient(Request $request){

           
             $data = Client::find($request->id ); 
             $data->name=$request->name;
             $data->email=$request->email;
             $data->phone=$request->phone;
             $data->country=$request->country;

             if($data->update()){

                 return [ 'success' => true, 'message' => ' Client info. updated Successfully '] ;
             }else{

                return [ 'success' => true, 'message' => '  info. updating fail '] ;

             }



          
       
    }



    public function deleteClient( Request $r){

              $client = Client::find($r->id ); 

        if ( $client->delete() ) {
            
            return [ 'success' => true, 'message' => 'Deleted one  Client  '] ;  
        }

    

    }





}

?>