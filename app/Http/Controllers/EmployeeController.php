<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function display(){
        return view('addemployee');
    }

    public function save(Request $request){
        $emp = new Employee;

        $emp->eid=$request->eid;
        $emp->f_name=$request->f_name;
        $emp->l_name=$request->l_name;
        $emp->nic=$request->nic;
        $emp->b_day=$request->b_day;
        $emp->address=$request->address;
        $emp->contact_no=$request->contact_no;
        $emp->email=$request->email;
        $emp->div=$request->div;
        $emp->designation=$request->designation;
        $emp->b_salary=$request->b_salary;

        $emp->save();

        $data=Employee::all();

        return view('/profiles')->with('emps', $data);

    }

    public function edit($id){
        $employee = DB::select('select * from employees where id = ?', [$id]);
        return view('updateemployee', ['employees'=>$employee]);
    }

    public function update(Request $request){
        $id = $request->id;
        $eid = $request->eid;
        $f_name = $request->f_name;
        $l_name = $request->l_name;
        $nic = $request->nic;
        $b_day = $request->b_day;
        $address = $request->address;
        $contact_no = $request->contact_no;
        $email = $request->email;
        $div = $request->div;
        $designation = $request->designation;
        $b_salary = $request->b_salary;

        $emp=Employee::find($id);
        $emp->eid=$eid;
        $emp->f_name=$f_name;
        $emp->l_name=$l_name;
        $emp->nic=$nic;
        $emp->b_day=$b_day;
        $emp->address=$address;
        $emp->contact_no=$contact_no;
        $emp->email=$email;
        $emp->div=$div;
        $emp->designation=$designation;
        $emp->b_salary=$b_salary;

        $emp->save();

        $emps['emps']=DB::table('employees')->get();

        return view('profiles', $emps);

    }

    public function delete($id){
        $emp=Employee::find($id);
        $emp->delete();
        return redirect()->back();
    }
}
