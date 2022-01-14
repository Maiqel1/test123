<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test1";

    //Database connection

    $conn = new mysqli($server,$username, $password, $dbname);
    if(isset($_POST['submit'])){

    if(!empty($_POST['firstname']) && !empty($_POST['lastName']) && !empty($_POST['gender'])){
        $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];

    $query = "insert into registration(firstName, lastName, gender)values('$firstName', '$lastName', '$gender')";

    $run = mysqli_query($conn,$query) or die(mysqli_error());
    if ($run) {
        echo "submission successful";
    }
    else {
        echo "submission not successful";
    }

    }
    else {
        echo "all fields required";
    }
    } 
   
?>

<!-- {($conn ->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }else {
        $stmt = $conn->prepare("insert into registration(firstName, lastName, gender)values(?, ?, ?)");
        $stmt->bind_param("sss",$firstName, $lastName, $gender);
        $stmt->execute();
        echo "submission sucessful";
        $stmt->close();
        $conn->close();
    }} -->