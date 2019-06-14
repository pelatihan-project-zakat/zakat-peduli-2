<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Transaction;
use App\Program;
use App\Bank;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('status', 1)->latest()->paginate(10);

        return view('users.validation', [
            'transactions' => $transactions,
        ]);
    }

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
        $transaction->save();
    }

    public function show($id)
    {
        //
    }

    public function edit(Transaction $transaction)
    {
        return view('users.upload', [
            'transaction' => $transaction,
        ]);
    }

    public function update(Request $request, Transaction $transaction)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('bukti_tf');
            // Untuk Menghapus gambar lama
            Storage::delete($transaction->bukti_tf);
            $transaction->bukti_tf = $imagePath;
        }

        $transaction->user_id = $request->user_id;
        $transaction->program_id = $request->program_id;
        $transaction->bank_id = $request->bank_id;
        $transaction->atas_nama = $request->atas_nama;
        $transaction->nominal = $request->nominal;
        $transaction->tgl_bayar = Carbon::now();;
        $transaction->status = 2;

        $transaction->save();

        return redirect()->route('transaction.index');
    }

    public function destroy($id)
    {
        //
    }

}
