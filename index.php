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

        #echo {
            text-align: center;
            font-family: Helvetica, sans-serif
        }

    </style>
</head>
<body>
<div class="login">
    <p id="newUser">Hi! It looks like you're new. You can sign up here:</p>
    <div class="col-12">
        <form class="group row" action=" /thanks.php" method="post">
            <input id="name" name="name" class="group-row" type="text" placeholder="name"> <br>
            <input id="email" name="email" class="group-row" type="text" placeholder="email"> <br>
            <input id="password" name="password" class="group-row" type="text" placeholder="password"> <br>
            <button class="btn btn-primary" type="submit" value="submit">Submit</button>

        </form>
    </div>
    <p id="existingUser">Hi <?php echo $_POST["name"]; ?>! It looks like you're already a member. You can log in here: </p>
    <div class="col-12">
        <form class="form-group row" action=" /thanks.php" method="post">
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
    var_dump($in);
    die;
}


if (isset($_POST['name'])) {

    // create new

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $servername = "127.0.0.1'";
    $username = "root";
    $password = "root";
    $dbname = "one";

    // Create connection
    $conn = new mysqli('127.0.0.1', $username, $password, $dbname);

    $sql = "INSERT INTO users (users_name, users_email, users_password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === true) {
        echo "<div id='echo'>Thanks for signing up! Welcome to The One Site.</div>";
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
}

if (isset($_POST['existingEmail'])) {

    // authenticate


}




//$existingEmail = $_POST['existingEmail'];
//$existingPassword = $_POST['existingPassword'];

?>

