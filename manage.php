<?php
    include 'db_conn.php';

    error_reporting(0);

    if(isset($_POST['submit'])){
        $userID = mysqli_real_escape_string($conn, $_POST['userID']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        if($password=$cpassword){
            $sql = "INSERT INTO pharmuser (userID, password, name) values ('$userID', '$password', '$name')";
            $result = mysqli_query($conn, $sql);
            if($result){
            }
            else{
                echo 'Please check your query';
            }
        }
        else{
            echo 'Password not matched';
        }
    }
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
               <li><a href="admin.php"><i class="fas fa-home"></i>Dashboard</a></li><br> 
               <li><a href="inventory.php"><i class="fa fa-archive"></i>Inventory</a></li><br> 
               <li><a href="manage.php" class="active"><i class="fa fa-user-plus"></i>Manage Users</a></li><br> 
               <li><a href="expenses.php"><i class="fa fa-money"></i>Expenses</a></li><br> 
               <li><a href="#"><i class="fa fa-medkit"></i>Medicine</a></li><br>
               <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li><br>
            </ul>
        </div>

        <div class="main-content">
            <header>
                <h1>
                    INVENTORY
                </h1>
                <div class="user-box">
                   <img src="images/young.jpg" width="40px" height="40px" alt="">
                    <div>
                    <h4>Goose</h4>
                    <small>Cashier</small>
                    </div>
                </div>
            </header>



            <main class="mngPage">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="register-form">
                                <h1>REGISTER</h1>
                                <form action="" method="POST">
                                    <?php if(isset($_GET['error'])) {?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php }?>   
                                        <div class="input-group">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>
                                        
                                        <div class="input-group">
                                            <input type="text" placeholder="UserID" name="userID">
                                        </div>

                                        <div class="input-group">
                                            <input type="password" placeholder="Password" name="password">
                                        </div>
                                        <div class="input-group">
                                            <input type="password" placeholder="Confirm Password" name="cpassword">
                                        </div>

                                        <div class="input-group">
                                            <button type=submit class="btn" name=submit>
                                                Register
                                            </button>
                                        </div>
                                    
                                </form>
                            </div> 

                        </div>
                        
                        <div class="col-6">
                            <div class="mngtbl">
                                <table>
                                    <tr>
                                        <th>ID</th>
                                        <th>USER ID</th>
                                        <th>PASSWORD</th>
                                        <th>NAME</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    $sql = "SELECT id, userID, password, name FROM pharmuser";
                                    $result = $conn-> query($sql);

                                    if ($result-> num_rows >0) {
                                        while ($row = $result-> fetch_assoc()){
                                            echo "<tr><td>". $row["id"] . "</td><td>". $row["userID"] ."</td><td>". $row["password"] ."</td><td>". $row["name"] ."</td>"; echo"<td> <a href='delete.php?rn=".$row['id']."'>Delete</a></td></tr>";
                                            

                                    
                                        }
                
                                        echo "</table>";

                                    }
                                    else{
                                        echo "No result";
                                    }

                                    $conn-> close();
                                    ?>
                                    
                                </table>

                            </div>

                        </div>               
                        </div>
                    
                   
                </div>
            </main>
            
            
            

            


            
        </div>  
        
        
                    
    </body>
</html>