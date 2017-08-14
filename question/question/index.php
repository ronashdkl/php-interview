<?php
/**
 * Created by PhpStorm.
 * User: rnsdk
 * Date: 8/12/2017
 * Time: 12:18 PM
 */
require "database.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>

<h2 class="text-center">PHP Test</h2>
<br>
<div class="divider"></div>
<div class="row">
    <div class="container">
        <div class="col-md-6">
            <form action="index.php" method="get">
                <div class="form-group">
                    <label for="search">Search</label>
                    <input type="text" class="form-control"  name="search" id="search" placeholder="Search">
                    <input type="submit" value="Search">
                </div>
            </form>
            <div class="divider">

            </div>
                <table class="table table-bordered">

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                    </tr>
                    <?php
                    if($_GET){
                        $search = $_GET['search'];
                       $sql = "SELECT * FROM information WHERE name LIKE '%$search%' OR  email LIKE '%$search%' OR  contact LIKE '%$search%'";

                    }else{
                        $search =null;
                        $sql = "SELECT * FROM information";
                    }
                    $query = mysqli_query($con,$sql);
                    while($data = mysqli_fetch_assoc($query)):
                    ?>
                    <tr>
                        <td><?= $data['name']?></td>
                        <td><?= $data['email']?></td>
                        <td><?= $data['contact']?></td>
                    </tr>
                    <?php endwhile; ?>

                </table>
        </div>
        <div class="col-md-6">
            <form action="backend.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="email">Contactl</label>
                    <input type="number" class="form-control" name="contact" id="contact" placeholder="contact">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
