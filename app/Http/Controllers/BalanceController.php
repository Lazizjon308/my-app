<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class BalanceController extends Controller
{

    public function index()
    {
        $totalIncome = Transaction::where('type', 'income')->sum('amount');
        $totalExpense = Transaction::where('type', 'expense')->sum('amount');
        $balance = $totalIncome - $totalExpense;

        return view('balance', compact('balance'));
    }


    public function plusBalanceInterface()
    {
        return view('kirim');
    }


    public function minusBalanceInterface()
    {
        return view('chiqim');
    }


    public function amountPlus(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Transaction::create([
            'description' => $request->description,
            'amount' => $request->amount,
            'date' => $request->date,
            'type' => 'income',
        ]);

        return redirect()->route('balance.index')->with('success', 'Daromad qo‘shildi.');
    }


    public function amountMinus(Request $request)
    {
//        dd($request);

        $request->validate([
            'description' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);


//        dd($request->all());

        Transaction::create([
            'description' => $request->description,
            'amount' => $request->amount,
            'date' => $request->date,
            'type' => 'expense',
        ]);
        return redirect()->route('balance.index');
    }
}
