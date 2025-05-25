<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;


class BalanceController extends Controller{

    public function index()
    {
        return view('kirim');
    }


    public function minusBalance(){
        return view('chiqim');
    }

    public function plusBalance(){
        return view('kirim');
    }

    public function soqqaPlus(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $amount = $_POST['amount'];
            $description = $_POST['description'];


            return view('home');
        } else {
            echo "Noto‘g‘ri so‘rov!";
        }

    }

    public function soqqaMinus(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $amount = $_POST['amount'];
            $description = $_POST['description'];


            return view('home');
        } else {
            echo "Noto‘g‘ri so‘rov!";
        }

    }
    public function store(Request $request)
    {
        $request->validate([
            'spentOn'=>'required|string',
            'amount' => 'required|numeric',

        ]);



        $income = new Transaction();
        $income->description = $request->description;
        $income->amount = $request->amount;
        $income->date = $request->date;

        $income->save();

        return redirect()->route('/')->with('success', 'Income added successfully.');
    }



}
