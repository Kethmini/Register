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

    public function delete($id){
        $emp=Employee::find($id);
        $emp->delete();
        return redirect()->back();
    }

    public function edit($id){
        $employee = DB::select('select * from employees where id = ?', [$id]);
        return view('updateemployee', ['employees'=>$employee]);
    }

    public function update(Request $request,$id){
        $employee_eid = $request->input('eid');
        $employee_f_name = $request->input('f_name');
        $employee_l_name = $request->input('l_name');
        $employee_nic = $request->input('nic');
        $employee_b_day = $request->input('b_day');
        $employee_address = $request->input('address');
        $employee_contact_no = $request->input('contact_no');
        $employee_email = $request->input('email');
        $employee_div = $request->input('div');
        $employee_designation = $request->input('designation');
        $employee_basic = $request->input('b_salary');

        DB::update('update employees set eid = ? , f_name = ? , l_name = ? , nic = ? , b_day = ? , address = ? ,contact_no = ? , email = ? , div = ? , designation = ? ,
b_salary = ? where id = ?', [$employee_eid,$employee_f_name,$employee_l_name,$employee_nic,$employee_b_day,$employee_address,$employee_contact_no,$employee_email,$employee_div,
            $employee_designation,$employee_basic, $id]);

        return redirect('profiles')->with('success','Data Updated');
    }
}
