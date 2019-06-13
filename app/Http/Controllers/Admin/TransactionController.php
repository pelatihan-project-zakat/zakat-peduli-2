<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('status', 2)->latest()->paginate(10);

        return view('admin.transaction.index', [
            'transactions'=>$transactions]);
    }

    public function success()
    {
        $transactions = DB::table('transactions')->where('status', '=', 3)->latest()->paginate(10);

        return view('admin.transaction.success', [
            'transactions'=>$transactions]);
    }

    public function failed()
    {
        $transactions = DB::table('transactions')->where('status', '=', 4)->latest()->paginate(10);

        return view('admin.transaction.failed', [
            'transactions'=>$transactions]);
    }

    public function sesuai(Transaction $transaction)
    {
        $transaction->status = 3;
        $transaction->save();

        return redirect()->route('admin.transaction.index');
    }

    public function ditolak(Transaction $transaction)
    {
        $transaction->status = 4;
        $transaction->save();

        return redirect()->route('admin.transaction.index');
    }

    public function showBuktiTf(Transaction $transaction)
    {
        
    }
    
}
