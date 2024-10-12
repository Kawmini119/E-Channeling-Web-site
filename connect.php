
<?php
    $Owners_name = $_POST['Owners_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $pharmacy_name = $_POST['pharmacy_name'];
 
    //Database connection

    $conn = new mysqli('localhost','root','','mystore');
    if($connection->connect_error){
        die("connection faild : " . $connection->connect_error);
    }else{
        $stmt = $conn->prepare("isert in to pharmacyregister(owners_name,phone_number,email,pharmacy_name)
             values(?,?,?,?)");
        $stmt->bind_param("siss",$owners_name , $phone_number , $email , $pharmacy_name);
        $stmt->execute();
        echo"Good";
        $stmt->close();
        $conn->close();


        
    }
    
?>