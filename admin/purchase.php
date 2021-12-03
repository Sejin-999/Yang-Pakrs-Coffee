<?php
  include "session.php";
  $price = $_POST['price'];
  $MemId = $_SESSION['ses_userid'];
  $conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'coffee');
  
  $sql = "
    INSERT INTO orders(
    O_price,
    M_num
    ) VALUES (
    '$price',
    '$MemId'
    )";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "<script>alert('주문이 완료되었습니다. 메인페이지로 돌아갑니다.');
          location.href='/indexLogin.php'; </script>";
  } else {
    echo mysqli_error($conn);
  }
?>