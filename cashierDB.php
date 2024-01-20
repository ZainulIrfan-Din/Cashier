<?php
$servername = "localhost";
$username = "adam_fudail";
$password = "cartigan";
$dbname = "restaurant_receipt";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn){
    echo 'Database Connected';
}
        
        $checked_arr = $_POST['cb'];
        $count = count($checked_arr);
        $date = date("Y/m/d");
        $time = date("H:i:sa");
        
        if(in_array('sirap', $_POST['cb'])){
            $item1 ="Sirap";
            $quantity1= $_POST["sir_qty"];
            //$sum1 = $quantity1 * 1.00;
            //$sub_total1 = $_POST["sir_sub"];
            $sub_total1 = $quantity1 * 1.00;
            $sql = "INSERT INTO cashier(item,quantity,sub_total,date,time) VALUES ('$item1','$quantity1','$sub_total1','$date','$time')";
            if (!mysqli_query($conn,$sql))
        {
            echo 'fail to connect';
        }
            }
    
            if(in_array('murtabak', $_POST['cb'])){
            $item2 = "Murtabak";
            $quantity2= $_POST["mur_qty"];
            $sub_total2 = $quantity2 * 4.00;
            $sql = "INSERT INTO cashier(item,quantity,sub_total,date,time) VALUES ('$item2','$quantity2','$sub_total2','$date','$time')";
            if (!mysqli_query($conn,$sql))
        {
            echo 'fail to connect';
        }
            }
    
            if(in_array('nasi_lemak', $_POST['cb'])){
            $item3 = "Nasi Lemak";
            $quantity3= $_POST["nasi_qty"];
            $sub_total3 = $quantity3 * 2.50;
            $sql = "INSERT INTO cashier(item,quantity,sub_total,date,time) VALUES ('$item3','$quantity3','$sub_total3','$date','$time')";
            if (!mysqli_query($conn,$sql))
            {
                echo 'fail to connect';
            }   
            }

        
        

    $conn->close();
    header("refresh:2;url=cashier.php")



?>