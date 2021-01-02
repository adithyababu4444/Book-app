<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
    <table class="table table-borderless">
        <tr>
            <td>Employee Code</td>
            <td><input name="uname" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Employee Name</td>
            <td><input name="emp" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input name="usara" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td>Designestion</td>
            <td><input name="design" class="form-control" type="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><button name="kpc" class="btn btn-info">Submitt</button></td>
        </tr>
    </table>  
    </form>
</body>
</html>
<?php
if(isset($_GET["kpc"]))
{
    $u=$_GET["uname"];
    $p=$_GET["emp"];
    $v=$_GET["usara"];
    $m=$_GET["design"];
    echo "<table class='table'>
    <tr><td>employee code</td>
    <td>$u</td></tr>
    <tr><td>employee name</td>
    <td>$p</td></tr>
    <tr><td>salary</td>
    <td>$v</td></tr>
    <tr><td>designestion</td>
    <td>$m</td></tr>
    </table>";
}