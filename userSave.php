<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
    body{
        background-color: #4e555b;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>

<form action="userSaveProcess.php"method="GET">
    <legend><a href="viewUsers.php">View Users</a>    </legend>
    <input type="text" placeholder="Name" name="x" required class="form-group"><br>
    <input type="email" placeholder="Email" name="y" required class="form-group"><br>
    <input type="password" placeholder="Pass" name="z" required class="form-group"><br>
    <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
    <input type="reset" name="btnreset" value="Refresh" class="btn btn-primary">
</form>
</body>
</html>