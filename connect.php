<?php
    $Name = $_POST['name'];
    $Email = $_POST['Email'];
    $telNo. = $_POST['telNo.'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    // connection

    $conn = new mysqli('localhost', 'root', '' , 'test');
    if($conn->connect_error){
        die('connection Failed : '$conn->connect_error);
        else{
            $stmt = $conn-> prepare ("insert into registration(Name,Email, telNo, Subject, Message) values(?, ?, ?, ?, ?)");
            $stmt->bind_param("ssiss", $Name, $Email, $telNo., $Subject, $Message);
            $stmt->is_execute();
            echo "Registration Successfully...";
            $stmt->close();
            $conn->close();

        }
    }
?>