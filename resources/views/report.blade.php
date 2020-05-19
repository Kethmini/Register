<!DOCTYPE html>
<html>
<head>
    <title>Pdf of Employees</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<br/>
<div class="container">
    <h3 align="center">Report of Employee Details</h3><br/>
    <div class="row">
    </div>
    <br/>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
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
                </tr>
            </thead>
            <tbody>
            @foreach($emp_data as $emp)
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

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>

</html>
