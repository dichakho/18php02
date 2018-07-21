<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <style>
        body{
            background-color: #F0F8FF;
        }
        div{
            width: 60%;
            margin: 0 auto;
            padding: 100px;
            text-align: center;
            
        }
        .btn{
            border-style: none;
            padding: 10px;
            background-color: #1473E6;
        }
        label{
            display: inline-block;
            width: 100px;
        }

    </style>
</head>
<body>
    <div>
        <h1>Log In</h1>
        <form action="" method="POST">
            <label for="username">Username: </label>
            <input type="text" id="username" name="username">
            <br><br>
            <label for="pwd">Password: </label>
            <input type="password" id="pwd" name="pwd">
            <br><br>
            <input class="btn" type="submit" value="Log In" name="submit">
            <br><br>
            Not a member yet?<a href="admin.php?controller=users&action=register">Get an ID</a>
        </form>
    </div>
</body>
</html>