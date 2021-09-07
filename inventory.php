<?php
include_once('db_conn.php');
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
               <li><a href="inventory.php" class="active"><i class="fa fa-archive"></i>Inventory</a></li><br> 
               <li><a href="manage.php"><i class="fa fa-user-plus"></i>Manage Users</a></li><br> 
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

            <main>
                <div>
                    <table>
                        <tr>
                            <th>MEDICINE ID</th>
                            <th>NAME</th>
                            <th>PRICE/1</th>
                            <th>QUANTITY</th>
                            <th>MANUFACTURER</th>
                            <th>EXPIRY DATE</th>
                        </tr>
                        <?php
                        $sql = "SELECT id, med_name, med_price, med_qty, company, exp_date FROM medicine";
                        $result = $conn-> query($sql);

                        if ($result-> num_rows >0) {
                            while ($row = $result-> fetch_assoc()){
                                echo "<tr><td>". $row["id"] . "</td><td>". $row["med_name"] ."</td><td>". $row["med_price"] ."</td><td>". $row["med_qty"] ."</td><td>". $row["company"] ."</td><td>". $row["exp_date"] ."</td></tr>";
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
            </main>
        </div>

    </body>
</html>