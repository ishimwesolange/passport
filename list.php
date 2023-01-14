
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passport</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>

<body class="">

    <nav class="navbar navbar-expand-sm bg-light navbar-light text-uppercase fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/rwanda.png" alt="" width="70"> 
                <span  style="color: green; text-align: center;margin-left: 10px" >Passport Application</span>
            </a>

            <ul class="navbar-nav">
                <li class="nav-item ">
                <a class="nav-link" href="index.php">New Application</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="list.php">Application List</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container bg-white">
        <div class="row pt-5">
            
            <div class="col-md-12 p-5">
                <h1  style="color: green; text-align: center;margin-top: 10px" > Application List</h1>
                <a href="index.php " class="text-white"> <button class="btn btn-success "></span> New Registration</button></a>


                <div class="table-responsive pt-5">
                    <table class="table">
                        <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Number</th>
                                    <th>Names</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Application Date</th>
                                    
                                </tr>
                        </thead>
                        <tbody>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "passport_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM citizens ORDER BY id DESC";
    $result = $conn->query($sql);

    // check if data are present in table
    if ($result->num_rows > 0) {

        // output data of each row
        $counter = 0;
        while($table_row = $result->fetch_assoc()) {
            //   print_r($table_row );
            $counter++;
        
?>
        <tr>
            <td> <?php echo $counter ?></td>
            <td><?php echo $table_row["id_number"] ?></td>
            <td><?php echo $table_row["firstname"]." ".$table_row["lastname"] ?></td>
            <td><?php echo $table_row["telephone"] ?></td>
            <td><?php echo $table_row["email"] ?></td>
            <td><?php 
                    echo "No: ".$table_row["house_number"].", ".
                    $table_row["street_number"] .", ".
                    $table_row["district"] .", ".
                    $table_row["province"] ."- Rwanda";
            ?></td>
            <td><?php echo $table_row["creation_date"] ?></td>
        </tr>
<?php
        }
    } else {
?>
        
        <tr>NO DATA </tr>
<?php
    }
    $conn->close();
?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Application details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
    <footer class="">
        <!-- Copyright Section-->
        <div class="footer py-4 text-center text-dark bg-light">
            <div class="container"><small>Copyright &copy;ULK-Y3-CS Our Goup</small></div>
        </div>
    </footer>
    
<script src="js/bootstrap.min.js"></script>
</body>

</html>