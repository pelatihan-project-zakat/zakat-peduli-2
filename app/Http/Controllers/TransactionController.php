<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Transaction;
use App\Program;
use App\Bank;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();

        return view('users.validation',compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $programs = Program::get();

        $banks = Bank::get();

        return view('users.transaction',[
            
            'programs' => $programs
        ],[
            'banks' => $banks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $imagePath = $request->file('bukti_tf');
        
        $transaction = new Transaction;
        
        $transaction->user_id = auth()->id(); 
        $transaction->program_id = $request->program;     
        $transaction->bank_id = $request->bank;
        $transaction->atas_nama = $request->atas_nama;
        $transaction->nominal = $request->nominal;      
        $transaction->bukti_tf = $imagePath;
        $transaction->status = $request->status;
        $transaction->tgl_bayar = $request->tgl_bayar;
        $transaction->metode_bayar = $request->metode_bayar;
        $transaction->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        
        return view('users.upload', [
            'transaction' => $transaction,
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        
        $transaction = Transaction::find($transaction);

        if ($request->hasFile('bukti_tf')) {
            $imagePath = $request->file('bukti_tf')->store('transaction');
            Storage::delete($transaction->bukti_tf);
            $transaction->bukti_tf = $imagePath;
            $transaction->status=2;
            
        }
        $transaction->save();
        return redirect()->route('users.validation')->with('info','Berhasil Upload');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
