<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        // $transaction->title = $request->title;
        // $transaction->amount = $request->amount;
        // $transaction->date = $request->date;
        $user->save();

        return response()->json(['status' => 'Success', 'message' => 'Transaction Saved',"data sent" => $user]);
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
