<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>축하합니다! 우리의 회원이 되었습니다.</title>
</head>
<body>
<?php

  $id=$_POST['M_num'];
  $name=$_POST['M_name'];
  $password1=$_POST['M_password'];
  $password2=$_POST['password2'];
  $address1=$_POST['M_address1'];
  $address2=$_POST['M_address2'];

  $conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'coffee');
  $sql = "
  INSERT INTO member(
      M_num,
      M_name,
      M_password,
      M_address,
      M_address2
    ) VALUES (
      '$id',
      '$name',
      '$password1',
      '$address1',
      '$address2'
    )";
      
  $result = mysqli_query($conn, $sql);
  if($result === true){
    echo "<script>alert('$name 님 회원가입이 완료되었습니다. 메인페이지로 돌아갑니다.');
          location.href='/login.php'; </script>";
  } else {
    echo mysqli_error($conn);
  }
?>
</body>
</html>