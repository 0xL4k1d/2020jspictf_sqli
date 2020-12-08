<html>
<head>
    <link rel="stylesheet" href="../09.css">
    <title>~Welcome To JCTF~realsqli</title>
</head>

<body>
<!-- .php.bak-->
<div class="mainbody middle">
    <form class="form-box front" id="loginbox" method="get">
        <div>
            <br>
            <br>
            <h1>Welcome To JCTF</h1>
            <h1>Login Here</h1>
        </div>
        <div>
            <input class="input-normal" type="text" placeholder="请在此输入ID" id="id" name="id"/>
            <div><br/></div>
            <button class="btn-submit" type="submit">
                登录
            </button>
        </div>
    </form>
</div>


<!---->
<?php
//including the Mysql connect parameters.
error_reporting(0);
include 'db.php';
// take the variables
if(isset($_GET['id']))
{
    $id=$_GET['id'];
// connectivity
    $sql="SELECT * FROM jspictf WHERE id='$id' LIMIT 0,1";
    $query=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

    if($row)
    {
        echo ("<h1>Login name:<h1>");
        echo $row['username'];
        echo ("<h1>Password:<h1>");
        echo $row['password'];
    }
    else
    {
            echo ("<h1>".mysqli_error($con)."</h1>");
            exit();
    }
}
else { echo "<h3 style='text-align: center;color:rgb(236, 34, 186)'>realsqli</h3><h3 style='text-align: center;color:rgb(236, 34, 186)'>Please input the ID as parameter with numeric value</h3>";}

?>
</body>
</html>