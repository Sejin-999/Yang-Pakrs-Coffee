<?php


// $conn = mysqli_connect(
//     'localhost',
//     'root',
//     '111111',
//     'coffee');
//     $sql = "
//     INSERT INTO member(
//         M_num,
//         M_name,
//         M_password,
//         M_address1,
//         M_address2,
//         M_order_price,
//         M_order_count
//         ) VALUES (
//         'idddd',
//         '민혁박',
//         '999999999',
//         '산기대',
//         '기숙사',
//         0,
//         0)";
    
    // $result = mysqli_query($conn, $sql);
    // if($result === false){
    //     echo mysqli_error($conn);
    // }
    // $sql = "SELECT * FROM member";
    // $result = mysqli_query($conn, $sql);
    // var_dump($result->num_rows);

    $host = 'localhost';
    $user = 'root';
    $passWord = '111111';
    $dbName = 'coffee';
   
    $dbConnect = new mysqli($host,$user,$passWord,$dbName);

?>
