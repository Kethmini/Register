<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    function index(){
        $emp_data = $this->get_emp_data();
        return view('report') -> with('emp_data' , $emp_data);
    }

    function get_emp_data(){
        $emp_data = DB::table('employees') ->limit(10) ->get();

        return $emp_data;
    }

    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf -> loadHTML($this->convert_employee_data_to_html());
        $pdf -> stream();
    }

    function convert_employee_data_to_html(){
        $emp_data = $this->get_emp_data();
        $output = '
        <h3 align = "center">Employee Data</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
            <tr>
                <th style="border: 1px solid; padding: 12px;">Employee ID</th>
                <th style="border: 1px solid; padding: 12px;">First Name</th>
                <th style="border: 1px solid; padding: 12px;">Last Name</th>
                <th style="border: 1px solid; padding: 12px;">NIC</th>
                <th style="border: 1px solid; padding: 12px;">Birth Day</th>
                <th style="border: 1px solid; padding: 12px;">Address</th>
                <th style="border: 1px solid; padding: 12px;">Contact Number</th>
                <th style="border: 1px solid; padding: 12px;">Email</th>
                <th style="border: 1px solid; padding: 12px;">Division</th>
                <th style="border: 1px solid; padding: 12px;">Designation</th>
                <th style="border: 1px solid; padding: 12px;">Basic Salary</th>
            </tr>
        ';
        foreach ($emp_data as $emp)
        {
            $output .= '
            <tr>
                <td style="border: 1px solid; padding: 12px;">'.$emp->eid.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->f_name.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->l_name.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->nic.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->b_day.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->address.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->contact_no.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->email.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->div.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->designation.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$emp->b_salary.'</td>
            </tr>
            ';
        }
        $output .= '</table>';
        return $output;
    }
}
