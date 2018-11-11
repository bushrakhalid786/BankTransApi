<?php

namespace App\Http\Controllers;

use App\BankTransaction;
use App\Http\Resources\BankTransaction as BankTransactionResource;
use App\Services\BankTransaction as BankTransactionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BankTransactionController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id'       => "required|numeric|min:1",
            'amount'        => "required|numeric|min:2",
            'bookingpart'   => "required|array",
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }

        try {
            BankTransactionService::create(
                $request->input('user_id'),
                $request->input('amount'),
                $request->input('bookingpart')
            );
            return new JsonResponse(['message' => 'Transaction Success'], 200);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => 'Transaction Failed'], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bankTransaction = BankTransaction::with('BankTransactionPart')->whereId($id)->get();
        return BankTransactionResource::collection($bankTransaction);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $bankTransaction = BankTransaction::find($id);
            foreach ($bankTransaction->bankTransactionPart as $transactionPart) {
                $transactionPart->delete();
            }
            $bankTransaction->delete();
            return new JsonResponse(['message' => 'Transaction Deleted'], 200);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => 'Delete Failed'], 400);
        }
    }
}
