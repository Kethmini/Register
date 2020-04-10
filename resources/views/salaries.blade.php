<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Employee Salaries</title>

    <style>
        body {
            background-color: #cca300;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            color: #4d2800;
        }
        table, th, td{
            border: 2px solid black;
            background-color: #ffff80;
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
        <img src="radin1.png" width="250" height="200" align="left">
        <h1 style="font-size: 50px">HOTEL RADIN PEARL</h1>
        <h3 style="font-size: 30px">EMPLOYEE SALARIES</h3>
        <form action="http://127.0.0.1:8000/emp">
            <input type="submit" class="button" value="ADD NEW SALARY" />
        </form>

        <table class="table table-hover">
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Division</th>
            <th>Designation</th>
            <th>Basic Salary</th>
            <th>Increments</th>
            <th>Decrements</th>
            <th>Action</th>

        </table>

    </div>
</div>
</body>
</html>
