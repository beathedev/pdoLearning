<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>´
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<main>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">PDO</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="signup.php" class="nav-link active">Sign up</a></li>
            </ul>
    </header>

    <form class="card" style="padding: 3em;" action="signupProcess.php" method="POST">
    <div class="form-group form-control-sm">
        <label for="exampleInputEmail1">First name</label>
        <input type="text" name="firstname" class="form-control" id="" placeholder="Enter first name" required>
        <label for="exampleInputPassword1">Last name</label>
        <input type="text" name="lastname" class="form-control" id="" placeholder="Enter last name" required>
        <label for="exampleInputPassword1">Address</label>
        <input type="text" name="address" class="form-control" id="" placeholder="Enter address" required>
        <br />
        <button type="submit" name="save" class="btn btn-success">Submit</button>
    </div>
    </form>   


    </div>    
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>