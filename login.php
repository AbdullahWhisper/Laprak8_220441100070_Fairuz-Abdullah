<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
   
    <!-- <div class="card" style="width: 18rem;"> -->
    <div class="card" style="width: 700px; height: 500px; top: 100px; left: 400px; border-radius: 10px; box-shadow: 0px 3px 20px rgba(0,0,0,0.3)">
        <div class="card-body">
          <h5 class="card-title" style="text-align: center; color: #3995EA; font-size: 69px;">LOGIN</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary" style="text-align: center;">Masukan Username dan Password</h6>
          <p class="card-text"> 
            <form action="konfig_log.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"></label>
              <input type="text" name="username" class="form-control" aria-describedby="emailHelp" placeholder="Username">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" ></label>
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <br>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input">
              <label class="form-check-label" for="exampleCheck1">Biarkan saya Masuk</label>
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" style="border-radius: 10px;font-size: 33px; background-color: #2C7FCC">Masuk</button>
            </div>
            <br>
           </p>
          <p class="card-text" style="text-align: center;">Lupa Password? <a href="#" class="card-link" style="text-decoration: none; color: #686868;">klik Disini!</a> </p>
          </form>
        </div>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>