

<!DOCTYPE html>
<html lang="en">
<title>
    Trojan Pharma
</title>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet">
        <link href="css/fontawesome.min.css" rel=stylesheet>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
    </head>

   

    <body>
    <div class="container pt-3">
            <div class="row">
                <div class="col-6 d-flex justify-content-start align-items-center">
                    <i class="fas fa-pills fa-9x"></i>
                    <h2 class="text-cyan d-inline pl-2">Trojan</h2>
                </div>
            </div>  
    </div>
        <div class="container pt-5">
            <div class="login-form">
            <h1>LOGIN</h1>
                <form action="login.php" method="POST">
                <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php }?>    
                    <div class="input-group">
                        <input type="text" placeholder="UserID" name="userID">
                    </div>

                    <div class="input-group">
                        <input type="password" placeholder="Password" name="password">
                    </div>

                    <div class="input-group">
                        <button type=submit class="btn" name=submit>
                            Login
                        </button>
                    </div>
                    <p><a href="admilogin.php">Sign in as Admin</a></p>
                    
                </form>
            </div> 
            
        </div>
    </body>