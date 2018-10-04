<html>
<title>One</title>
<head>
    <div id="head">
        <h1>The One Site</h1>
    </div>
    <style>
        html {
            background-color: #fffde9;
            color: black;
        }

        h1 {
            text-align: center;
            font-family: Helvetica, sans-serif;
        }

        body {
            margin: 50px 100px;
        }

        .login {
            font-family: Helvetica, sans-serif;
        }

        input {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 10px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: cornflowerblue;
            color: white;
            padding: 12px 20px;
            margin: 8px 10;
            display: inline-block;
        }

        button:focus {
            outline: 0;
        }
    </style>
</head>
<body>
<div class="login">
    <p id="newUser">Hi! It looks like you're new. You can sign up here:</p>
    <div class="col-12">
        <form class="group row" action="index.php" method="post">
            <input id="name" name="name" class="group-row" type="text" placeholder="name"> <br>
            <input id="email" name="email" class="group-row" type="text" placeholder="email"> <br>
            <input id="password" name="password" class="group-row" type="text" placeholder="password"> <br>
            <button class="btn btn-primary" type="button">Submit</button>

        </form>
    </div>
    <p id="existingUser">Hi! It looks like you're already a member. You can log in here: </p>
    <div class="col-12">
        <form class="form-group row" action="index.php" method="post">
            <input id="existingEmail" name="existingEmail" class="group-row" type="text" placeholder="email"> <br>
            <input id="existingPassword" name="existingPassword" class="group-row" type="text" placeholder="password"> <br>
            <button class="btn btn-primary" type="button">Submit</button>
        </form>
    </div>
</div>
</body>
</html>

<?php

function dd($in)
{
    var_dump($_POST);
    die;
}


dd($_REQUEST);
dd($_POST);


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$existingEmail = $_POST['existingEmail'];
$existingPassword = $_POST['existingPassword'];


?>
