<!DOCTYPE html>
<html>
<head>
    <title>Pdf of Salaries</title>
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
    <h3 align="center">Report of Salary Details</h3><br/>
    <div class="row">
    </div>
    <br/>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Employee ID</th>
                <th>Full&nbspName</th>
                <th>Email</th>
                <th>Division</th>
                <th>Designation</th>
                <th>Basic Salary</th>
                <th>Increments</th>
                <th>Decrements</th>
                <th>Net&nbspSalary</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sal_data as $sal)
                <tr>
                    <td>{{$sal->eid}}</td>
                    <td>{{$sal->full_name}}</td>
                    <td>{{$sal->email}}</td>
                    <td>{{$sal->div}}</td>
                    <td>{{$sal->designation}}</td>
                    <td>{{$sal->b_salary}}</td>
                    <td>{{$sal->increments}}</td>
                    <td>{{$sal->decrements}}</td>
                    <td>{{$sal->net_salary}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>

</html>
