<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TransactionViewOnlyController extends Controller
{
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
}
