<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Employee Profiles</title>

    <style>
        body {
            background-color: #cca300;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            color: #4d2800;
        }
        table, th, td {
            border: 2px solid black;
            background-color: #ffff80;
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
    <div class="text-center">
        <img src="radin1.png" width="250" height="200" align="left">
        <h1 style="font-size: 50px">HOTEL RADIN PEARL</h1>
        <h3 style="font-size: 30px">EMPLOYEE PROFILES</h3>
        <form action="">
            <input type="submit" class="button" value="ADD NEW EMPLOYEE">
        </form>

        <table class="table table-hover">
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>NIC</th>
            <th>Birth Day</th>
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
                        <a href="updateemp/{{$emp->id}}" class="button">UPDATE</a>
                    </td>
                    <td>
                        <a href="/deleteemp/{{$emp->id}}" class="button">DELETE</a>
                    </td>

                </tr>
            @endforeach

        </table>

    </div>
</div>
</body>
</html>
