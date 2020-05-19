<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pro', function (){
    $data=App\Employee::all();
    return view('profiles')->with('emps', $data);
});

Route::get('/employee' , 'EmployeeController@display');

Route::post('/saveEmp','EmployeeController@save');

Route::get('/deleteemp/{id}', 'EmployeeController@delete');

Route::get('updateemp/{id}', 'EmployeeController@edit');

Route::post('/update/{id}','EmployeeController@update');

Route::get('/addsal',function (){
    return view('addsalary');
});

/* Route::get('/payslip', function (){
    return view('payslip');
}); */

Route::get('/sal', function (){
    $data=App\Salary::all();
    return view('salaries')->with('sals', $data);
});

Route::post('/saveSal','SalaryController@save');

Route::get('/deleteSal/{id}', 'SalaryController@delete');

Route::get('report', 'PrintController@index');

Route::get('/report/pdf', 'PrintController@pdf');

Route::get('salaryreport', 'ReportController@index');

Route::get('/salaryreport/pdf', 'ReportController@pdf');
