<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Employee Profiles</title>

    <style>
        body {
            background-color: #ccb63b;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            color: #4d2800;
        }
        table, td {
            border: 2px solid black;
            background-color: #ffff80;
        }
        th{
            border: 2px solid black;
            background-color: #E5DE03;
        }
        .button{
            background-color: #992600;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            padding: 10px 24px;
        }
    </style>

</head>
<body>
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-danger">
            <h4>{{\Session::get('success')}}</h4>
        </div>
    <hr>
    @endif

    <div class="text-center">
        <img src="radin1.png" width="250" height="200" align="left">
        <h1 style="font-size: 50px">HOTEL RADIN PEARL</h1>
        <h3 style="font-size: 30px">EMPLOYEE PROFILES</h3>
        <form action="http://127.0.0.1:8000/employee">
            <input type="submit" class="button" value="ADD NEW EMPLOYEE">
        </form>
        </br>

        <table class="table table-hover">
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>NIC</th>
            <th>Birth&nbspDay</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Division</th>
            <th>Designation</th>
            <th>Basic Salary</th>
            <th>Edit</th>
            <th>Delete</th>

            @foreach($emps as $emp)
                <tr>
                    <td>{{$emp->eid}}</td>
                    <td>{{$emp->f_name}}</td>
                    <td>{{$emp->l_name}}</td>
                    <td>{{$emp->nic}}</td>
                    <td>{{$emp->b_day}}</td>
                    <td>{{$emp->address}}</td>
                    <td>{{$emp->contact_no}}</td>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp->div}}</td>
                    <td>{{$emp->designation}}</td>
                    <td>{{$emp->b_salary}}</td>
                    <td>
                        <a href="/updateemp/{{$emp->id}}" class="button">UPDATE</a>
                    </td>
                    <td>
                        <a href="/deleteemp/{{$emp->id}}" class="button">DELETE</a>
                    </td>

                </tr>
            @endforeach

        </table>

        <a href="/report" class="button">Generate Report</a>

    </div>
</div>
</body>
</html>
