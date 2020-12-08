<html>
<head>
    <link rel="stylesheet" href="../09.css">
    <title>~Welcome To JCTF~easysqli</title>
</head>

<body>
<!-- .php.bak-->
<h3 style='text-align: center;color:rgb(236, 34, 186)'>easysqli</h3>
<div class="mainbody middle">
    <form class="form-box front" id="loginbox" method="post" action="login.php">
        <div>
            <br>
            <br>
            <h1>Welcome To JCTF</h1>
            <h1>Login Here</h1>
        </div>
        <div>
            <input class="input-normal" type="text" placeholder="用户名或邮箱" id="username" name="username"/>
            <input class="input-normal" type="text" placeholder="密码" id="password" name="password"/>
            <div><br/></div>
            <button class="btn-submit" type="submit">
                登录
            </button>
        </div>
    </form>
</div>
</body>
</html>