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
</body>
<form method="POST">

<table class="table table-broderless">
<tr>
    <td>bookname</td>
    <td><input name="uname" class="form-control" type="text"></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="pzy" class="btn btn-info">search</button></td>
    </tr></table>
</form>

</html>
<?php
if(isset($_POST["pzy"]))
{
    $u=$_POST["uname"];
    $connection=new mysqli("localhost","root","","books");
    $sql="SELECT `id`, `tittle`, `author`, `price` FROM `book` WHERE `tittle`='$u'";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $getauthor=$row['author'];
            $getprice=$row['price'];
            echo "<table class='table'>
            <tr><td>author</td>
            <td>$getauthor</td>
            </tr>
            <tr><td>price</td>
            <td>$getprice</td>
            </tr>
            </table>";
        }

    }
    else
    {
        echo "no book found";
    }
}
?>

