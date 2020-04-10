<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Update Employee</title>

    <style>
        body {
            background-color: #cca300;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            color: #4d2800;
        }
        .button{
            background-color: #992600;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            padding: 10px 24px;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="text-center">
        <h1 style="font-size: 50px">HOTEL RADIN PEARL</h1>
        <h3 style="font-size: 30px">UPDATE EMPLOYEE</h3>
        </br>
        <div class="row">
            <div class="col-md-12">
                <form action="/update/{{$employees[0]->id}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <input type="text" required minlength="5" length="5" class="form-control" name="eid" value="{{$employees[0]->eid}}" placeholder="Enter Employee ID">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="f_name" value="{{$employees[0]->f_name}}"placeholder="Enter Employee First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="l_name" value="{{$employees[0]->l_name}}"placeholder="Enter Employee Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nic" value="{{$employees[0]->nic}}"placeholder="Enter Employee NIC">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="b_day" value="{{$employees[0]->b_day}}"placeholder="Enter Employee Birth Day">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" value="{{$employees[0]->address}}"placeholder="Enter Employee Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact_no" value="{{$employees[0]->contact_no}}"placeholder="Enter Employee Contact No">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" value="{{$employees[0]->email}}"placeholder="Enter Employee Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="div" value="{{$employees[0]->div}}"placeholder="Enter Employee Division">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="designation" value="{{$employees[0]->designation}}"placeholder="Enter Employee Designation">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="b_salary" value="{{$employees[0]->b_salary}}"placeholder="Enter Employee Basic Salary">
                    </div>
                    </br>
                    <input type="submit" class="button" value="UPDATE">
                    <input type="reset" class="button" value="RESET">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
