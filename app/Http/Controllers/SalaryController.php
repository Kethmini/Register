<?php

namespace App\Http\Controllers;

use App\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function save(Request $request){
        $sal = new Salary;

        $sal->eid=$request->eid;
        $sal->full_name=$request->full_name;
        $sal->email=$request->email;
        $sal->div=$request->div;
        $sal->designation=$request->designation;
        $sal->b_salary=$request->b_salary;
        $sal->increments=$request->increments;
        $sal->decrements=$request->decrements;
        $sal->net_salary=$request->net_salary;

        $sal->save();

        $data = Salary::all();

        return view('/salaries')->with('sals', $data);
    }

    public function delete($id){
        $sal=Salary::find($id);
        $sal->delete();
        return redirect()->back();
    }
}
