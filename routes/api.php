<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * get transactions of a user
 * get route : /api/trans/1 will give all the transactions of user_id = 1
 *
*/
Route::apiResource('trans', 'UserController');


/*
 * get transaction and transaction parts by passing transaction id
 * get route    : /api/tran/1 will give transaction_id 1 with parts
 * post route   : /api/tran will create new transaction and parts
 * delete route : /api/tran/1 will delete transaction 1 and also related transaction parts
*/
Route::apiResource('tran', 'BankTransactionController');
