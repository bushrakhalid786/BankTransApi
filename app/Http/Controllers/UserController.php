<?php

namespace App\Http\Controllers;

use App\BankTransaction;
use App\Http\Resources\User as UserResource;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Display the all transaction for the user.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $banktransactions = BankTransaction::with('BankTransactionPart')->whereUserId($user->id)->get();
        return UserResource::collection($banktransactions);
    }

}
