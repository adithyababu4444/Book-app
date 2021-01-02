<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <table class="table">
            <tr>
                <td>Name</td>
                <td><input name="pse" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Roll No</td>
                <td><input name="swo" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Admission No</td>
                <td><input name="qss" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>College</td>
                <td><input name="lnm" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Email ID</td>
                <td><input name="ssp" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Parent Name</td>
                <td><input name="tom" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Parent Mobile</td>
                <td><input name="pwd" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Email ID</td>
                <td><input name="swe" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input name="ops" class="form-control" type="text"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input name="apw" class="form-control" type="password"></td>
                <tr>
                    <td>Conform password</td>
                    <td><input name="kps" class="form-control" type="conform password"></td>
                </tr>
            </tr>
            <tr>
                <td></td>
                <td><button name="but" class="btn btn-info">Register</button></td>
            </tr>
        </table> 
     
    </form>
</body>
</html>
<?php
if(isset($_POST["but"]))
    $a=$_POST["psc"];
    $b=$_POST["swo"];
    $c=$_POST["qss"];
    $d=$_POST["inm"];
    $e=$_POST["ssp"];
    $f=$_POST["tom"];
    $g=$_POST["pwd"];
    $h=$_POST["swe"];
    $i=$_POST["ops"];
    $j=$_POST["apw"];
    $k=$_POST["kps"];
    $connection=new mysqli("localhost","root","","student");
    $sql="INSERT INTO `stud`( `name`, `rollno`, `admissionno`, `college`, `studemail`, `parentname`, `parentphone`, `pemailid`, `username`, `password`, `conformpassword`)
    VALUES('$a',$b,$c,'$d','$e','$f',$g,'$h','$i','$j',"$k")";   
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






?>