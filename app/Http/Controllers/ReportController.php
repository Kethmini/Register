<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    function index(){
        $sal_data = $this->get_sal_data();
        return view('salaryreport') -> with('sal_data' , $sal_data);
    }

    function get_sal_data(){
        $sal_data = DB::table('salaries') ->limit(10) ->get();

        return $sal_data;
    }

    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf -> loadHTML($this->convert_salary_data_to_html());
        $pdf -> stream();
    }

    function convert_salary_data_to_html(){
        $sal_data = $this->get_sal_data();
        $output = '
        <h3 align = "center">Salary Details</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
            <tr>
                <th style="border: 1px solid; padding: 12px;">Employee ID</th>
                <th style="border: 1px solid; padding: 12px;">Full Name</th>
                <th style="border: 1px solid; padding: 12px;">Email</th>
                <th style="border: 1px solid; padding: 12px;">Division</th>
                <th style="border: 1px solid; padding: 12px;">Designation</th>
                <th style="border: 1px solid; padding: 12px;">Basic Salary</th>
                <th style="border: 1px solid; padding: 12px;">Increments</th>
                <th style="border: 1px solid; padding: 12px;">Decrements</th>
                <th style="border: 1px solid; padding: 12px;">Net Salary</th>
            </tr>
        ';

        foreach ($sal_data as $sal)
        {
            $output .= '
            <tr>
                <td style="border: 1px solid; padding: 12px;">'.$sal->eid.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$sal->full_name.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$sal->email.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$sal->div.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$sal->designation.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$sal->b_salary.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$sal->increments.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$sal->decrements.'</td>
                <td style="border: 1px solid; padding: 12px;">'.$sal->net_salary.'</td>
            </tr>
            ';
        }
        $output .= '</table>';
        return $output;
    }
}

