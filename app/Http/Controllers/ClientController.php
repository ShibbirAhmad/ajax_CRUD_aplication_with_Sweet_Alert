<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Validator;


class ClientController extends Controller
{
    public function home()
    {

        return view('ajax_home');
    }


    public function index()
    {

        $clients = Client::all();

        return view('ajax_crud', \compact('clients'));
    }

    public function getClient()
    {

        return Client::latest()->get();
    }


    public function addClient(Request $request)
    {
        //first make the validate data

        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',

        ]);


        //if Validator not fail...

        if (!$validator->fails()) {
            $client = new Client();
            $client->name = $request->name;
            $client->email = $request->email;
            $client->phone = $request->phone;
            $client->country = $request->country;

            //if client save
            if ($client->save()) {
                return response()->json([
                    'success' => "OK",
                    'data' => $client,
                    'status' => "add"

                ]);
            }
        }

        return response()->json([
            'success' => 'Fail',
            'errors' => $validator->errors()->all()
        ]);
    }


    public function updateClient(Request $request)
    {
        //first make the validate data

        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',

        ]);


        //if Validator not fail...

        if (!$validator->fails()) {
            //find the client with id wise
            $client = Client::find($request->id);

            //if found client
            if ($client) {
                $client->name = $request->name;
                $client->email = $request->email;
                $client->phone = $request->phone;
                $client->country = $request->country;
                if ($client->save()) {
                    return response()->json([
                        'success' => "OK",
                        'data' => $client,
                        'status' => "update"
                    ]);
                }
            }
        }


    }


    public function deleteClient(Request $r)
    {
        //find the client with id wise
        $client = Client::find($r->id);

        //find client delete
        if ($client->delete()) {
            return response()->json([
                'success' => "OK",
                'status'  => "Deleted"
            ]);
        }

    }





}

?>
