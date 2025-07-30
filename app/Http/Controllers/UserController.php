<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        
        $data = auth()->user()->expenses;
        $income = $data->where('type', 'Income')->sum('amount');
        $expense = $data->where('type', 'Expense')->sum('amount');
        $total = $income - $expense;

        return view('exp.index',['data'=>$data , 'total' => $total]);
    }
    public function add(Request $request){
        auth()->user()->expenses()->create([
            'amount'=>$request->amount,
            'type'=>$request->type,
            'description' => $request->description ,
            'date' => $request->date,
        ]);
        // Expenses::create($request->all());
        return redirect()->route('exp.index');
    }
    public function destroy(Expenses $data){
        $data->delete();
        return redirect()->route('exp.index');
    }
    
}
