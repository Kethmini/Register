<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add Salary</title>

    <style>
        body {
            background-color: #ccb63b;
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
        <img src="radin1.png" width="500" height="550" align="left">
        <h1 style="font-size: 50px">HOTEL RADIN PEARL</h1>
        <h3 style="font-size: 30px">ADD SALARY</h3>
        </br>
        <div class="row">
            <div class="col-md-12">
                <form action="/saveSal" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" required minlength="5" class="form-control" name="eid" placeholder="Enter Employee ID">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Enter Employee Full Name">
                    </div>
                    <div class="form-group">
                        <input type="email" required class="form-control" name="email" placeholder="Enter Employee Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="div" placeholder="Enter Employee Division">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="designation" placeholder="Enter Employee Designation">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control prc" name="b_salary" placeholder="Enter Employee Basic Salary">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control prc" name="increments" placeholder="Enter Increments of the Month">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control prc" name="decrements" placeholder="Enter Decrements of the Month">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control prc" name="net_salary" placeholder="Net Salary of the Month">
                    </div>
                    <input type="submit" class="button" value="SUBMIT">
                    <input type="reset" class="button" value="RESET">
                </form>

            </div>
        </div>
    </div>
</div>
</body>
</html>
