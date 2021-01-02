<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">      
          <div class="col col-12 col-md-6">
        </div>
    </div>
    <form method="get">
    <table clas="table table borderless">
<tr>
    <td>username</td>
    <td><input name="uname" class="form-control" type="text"></td>
</tr>
<tr>
    <td>password</td>
    <td><input name="pass" class="form-control" type="password"></td>
</tr>
<tr>
    <td></td>
    <td><button name="btd" class="btn btn-info">login</button></td>
</tr>
</table>   
  
    </form>    
</body>
</html>
<?php
if(isset($_GET["btd"]))
{
    $u=$_GET["uname"];
    $p=$_GET["pass"];
    echo $u;
    echo "<br>";
    echo $p;
}
?>