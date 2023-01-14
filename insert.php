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



if($_POST){


    $id_number = $_POST['id_number'];
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $gender = $_POST['gender'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $civil_state = $_POST['civil_state'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $cell = $_POST['cell'];
    $village = $_POST['village'];
    $street_number = $_POST['street_number'];
    $house_number = $_POST['house_number'];

    if( $id_number == "" || $firstname== "" || $lastname== "" || $gender== "" || $telephone== "" || $email== "" || $birthdate== "" || $civil_state== "" || $father_name=="" || $mother_name== "" || $province== "" || $district== "" || $sector== "" || $cell== "" || $village== "" || $street_number== "" || $house_number== "" ) {
        echo "Please fill the empty fields!";
        
    }
    else{
            
        $sql = "SELECT * FROM citizens WHERE id_number = $id_number";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "This Id number is already in the system";
        }else{
            
            $sql = "
            INSERT INTO citizens
            ( 
                id_number, firstname, lastname, gender, telephone, email, birthdate, civil_state, father_name,
                mother_name, province, district, sector, cell, village, street_number, house_number, creation_date
            ) 
            VALUES (
                '$id_number',
                '$firstname',
                '$lastname',
                '$gender',
                '$telephone',
                '$email',
                '$birthdate',
                '$civil_state',
                '$father_name',
                '$mother_name',
                '$province',
                '$district',
                '$sector',
                '$cell',
                '$village',
                '$street_number',
                '$house_number',
                NOW()
            )
            ";


            if ($conn->query($sql) === TRUE) {
                echo "Application submitted successfully";

                header( "refresh:3; url=list.php" );
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }  

    }
}

$conn->close();
?>
