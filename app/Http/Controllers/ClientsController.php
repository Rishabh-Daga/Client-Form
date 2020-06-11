<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function home(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'number' => 'required|string|max:10|min:10'
        ]);

        $client = new Client([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
        ]);

        $client->save();
        return view('home')->with('id', $client->id);
    }
    
    public function final(Request $request, $id) {
        $request->validate([
            'web/app' => 'required|string',
            'business_name' => 'string',
            'type' => 'required|string',
            'product/service' => 'required|string',
            'additional_features' => 'string',
            'reference_websites' => 'string'
        ]);

        $client = Client::find($id);
        $client->update($request->all());

        return view('final');
    }
}