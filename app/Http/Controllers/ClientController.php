<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //    getting data by where in any operation is its depth 

        $users = client::all();

        return view("home", compact('users'));
        // return $users;
        // foreach ($users as $ab) {
        //     echo "<h1>" . $ab->name . "</h1><br>";
        // }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Newuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new client;

        $user->name = $request->name;
        $user->surename = $request->surename;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;

        $user->save();

return redirect()->route('client.index') 
->with('status','new User added Successfully.😀');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find the client by ID
        $client = client::find($id);
    
        // Check if a client was found
        if ($client) {
            // Client found, return the view with the client data
            return view("Singleuser", compact('client'));
        } else {
            // No client found, handle the error (e.g., return a 404 response)
            abort(404, 'Client not found.');
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }
}
