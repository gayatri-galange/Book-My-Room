<html>
    <head>
         <title> User login and registration</title>
         <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    </head>
    <style>
        
        /* #background-video {
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
} */

</style>
    <body>
    
<video autoplay muted loop id="myVideo">
            <source src="calo.mp4" type="video/mp4">
          </video>  
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                   <div class="aa"><h2> Login Here</h2><br></div>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label><br><h5> Username</h5></label><br>
                            <input type="text" name="user" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <label> <h5> Password</h5></label><br>
                            <input type="password" name="password" class="form-control" required><br>
                        </div>
                        <button type="submit" class="btn btn-danger"> Login</button>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                <div class="aa"><h2> Register Here</h2><br></div>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label> <br><h5> Username</h5></label><br>
                            <input type="text" name="user" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <label> <h5> Password</h5></label><br>
                            <input type="password" name="password" class="form-control" required><br>
                        </div>
                        <button type="submit" class="btn btn-danger"> Register</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>