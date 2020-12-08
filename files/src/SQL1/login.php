<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Success</title>
    <style>
        h4 {
            background: url(../images/wyf.png) no-repeat;
            width: 827px;
            height: 476px;
        }
        h4 span {
            display: none;
        }
    </style>
</head>
<body>
<?php

include 'db.php';


$username = $_POST['username'];
$password = md5($_POST['password']);

$sql="SELECT `username`,`password` FROM `jspictf`.`jspictf` where username='$username' and password='$password'";


$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);

if($row)
{
    echo '<h2>Hello '.$row['username'].'!</h2>' ;
}
if (!$query) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

//echo $row["pw"];
if ($row['username'] == "admin") {
    echo ("<h2>把一凡哥哥挪开你就能看到flag！</h2><h2>问题是，你忍心吗？</h2><h4><span>
Logged in! Key.flag{e758c275-1922-4ef8-90cf-7b181a2a70bf}</span></h4>");
}


if ($row['username'] != "admin") {
    echo("<h1>You are not admin!</h1>
               <img src=\"../images/zm.gif\">");
}

$result = $con->query($sql);


?>
</body>
</html>