<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $tasks = DB::table('tasks')->get();
        return view('tasks',compact('tasks'));
    }

public function store(){
    DB::table('tasks')->insert([
        'item' => $_REQUEST['name'],
        'amount' =>$_REQUEST['amount'],
        'purchase_date' => $_REQUEST['Expense_Date']
    ]);
    return redirect()->back();
}

public function delete($id){
    DB::table('tasks')->where('id','=',$id)->delete();
    return redirect()->back();
}
}

