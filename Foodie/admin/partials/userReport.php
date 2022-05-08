<?php
    include '_dbconnect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    
</head>
<body onload="print()">
    <div class="container">
        <center>
            <h3 style="margin-top: 30px;">Manager List</h3>
            <hr>
        </center>
        <table id="ready" class="table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <!-- <th>Type</th> -->

                </tr>
        </thead>
        <tbody>
            <?php 
                 // $sql = "SELECT * FROM users"; 
                 // $result = mysqli_query($conn, $sql);

                 // while($row=mysqli_fetch_array($result)) {
            $sql = "SELECT * FROM users"; 
            $result = mysqli_query($conn, $sql);
                            
            while($row=mysqli_fetch_assoc($result)) {
                   
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['fullName']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['phone']?></td>
                <!-- <td><?php echo $row['userType']?></td> -->


            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
    <!-- <div class="container">
        <button type="" class="btn btn-info noprint" style="width:100%" onclick="window.location.replace('userManage.php');">CANCLE PRINTING</button>
    </div> -->
    
</body>
</html>