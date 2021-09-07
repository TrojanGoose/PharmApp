<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['userID'])) {


?>

<!DOCTYPE html>
<html>

    <title>HOME</title>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/adm.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet">
        <link href="css/fontawesome.min.css" rel=stylesheet>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="sidebar">
            <header>Admin Dashboard</header>
            <ul>
               <li><a href="admin.php" class="active"><i class="fas fa-home"></i>Dashboard</a></li><br> 
               <li><a href="inventory.php"><i class="fa fa-archive"></i>Inventory</a></li><br> 
               <li><a href="manage.php"><i class="fa fa-user-plus"></i>Manage Users</a></li><br> 
               <li><a href="expenses.php"><i class="fa fa-money"></i>Expenses</a></li><br> 
               <li><a href="#"><i class="fa fa-medkit"></i>Medicine</a></li><br>
               <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li><br>
            </ul>
        </div>

        <div class="main-content">
            <header>
                <h1>
                    DASHBOARD
                </h1>
                <div class="user-box">
                   <img src="images/young.jpg" width="40px" height="40px" alt="">
                    <div>
                    <h4>Goose</h4>
                    <small>Cashier</small>
                    </div>
                </div>
            </header>

            <main>
                <div class="cards">
                    <div class="cards-single">
                        <div>
                            <h1>50</h1>
                            <span>Today's Sales</span>
                        </div>
                        <div>
                            <span class="fa fa-shopping-cart"></span>
                        </div>
                    </div>

                    <div class="cards-single">
                        <div>
                            <h1>50</h1>
                            <span>Today's Sales</span>
                        </div>
                        <div>
                            <span class="fa fa-shopping-cart"></span>
                        </div>
                    </div>

                    <div class="cards-single">
                        <div>
                            <h1>50</h1>
                            <span>Today's Sales</span>
                        </div>
                        <div>
                            <span class="fa fa-shopping-cart"></span>
                        </div>
                    </div>

                    <div class="cards-single">
                        <div>
                            <h1>50</h1>
                            <span>Today's Sales</span>
                        </div>
                        <div>
                            <span class="fa fa-shopping-cart"></span>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}