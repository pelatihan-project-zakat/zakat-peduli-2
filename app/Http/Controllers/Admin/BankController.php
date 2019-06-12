<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bank;
use Illuminate\Support\Facades\Storage;

class BankController extends Controller
{
    public function index()
    {
        $banks = Bank::latest()->paginate(10);

        return view('admin.bank.index', [
            'banks'=>$banks]);
    }

    public function create()
    {
        return view('admin.bank.create');
    }

    public function store(Request $request)
    {
        $bank = new Bank();

        $bank->nama_bank = $request->nama_bank;
        $bank->no_rek = $request->no_rek;

        $imagePath = $request->file('image')->store('bank');
        $bank->logo = $imagePath;
        
        $bank->save();

        return redirect()->route('bank.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Bank $bank)
    {
        return view('admin.bank.edit',[
            'bank' => $bank,
        ]);
    }

    public function update(Request $request, Bank $bank)
    {
        $bank->nama_bank = $request->nama_bank;
        $bank->no_rek = $request->no_rek;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('bank');
            // Untuk Menghapus gambar lama
            Storage::delete($bank->logo);
            $bank->logo = $imagePath;
        }
        
        $bank->save();

        return redirect()->route('bank.index');
    }

    public function destroy(Bank $bank)
    {
        $bank->delete();
        Storage::delete($bank->logo);

        return redirect()->route('bank.index');
    }
}
