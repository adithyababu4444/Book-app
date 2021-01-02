<!DOCTYPE html>
<html lang="en">
<head><<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-2">          
             <div class="col col-12 col-sm-8">
             <div class="col col-12 col-sm-2">
            </div>
        </div>
    </div>
    <form method="POST">
        <table class="table table-borderless">
            <tr>
                <td>Book name</td>
                <td><input name="uname" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input name="usra" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Prize</td>
                <td><input name="prizz" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="but" class="btn btn-info">Submit</button></td>
            </tr>

        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST["but"]))
{
    $u=$_POST["uname"];
    $p=$_POST["usra"];
    $v=$_POST["prizz"];
    $connection=new mysqli("localhost","root","","books");
    $sql="INSERT INTO `book`( `tittle`, `author`, `price`) 
    VALUES( '$u','$p',$v)";
    $result=$connection->query($sql);
    if($result===true)
    {
        echo"<script>alert('successfully done')</script>";
    }
    else{
        echo "error";
    }

}
?>