<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원정보</title>
  <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
    </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>아이디</th>
        <th>이름</th>
        <th>비밀번호</th>
        <th>주소</th>
        <th>상세주소</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $conn = mysqli_connect(
          'localhost',
          'root',
          '111111',
          'coffee'
        );
        $sql = "SELECT * FROM member";
              
        $result = mysqli_query($conn, $sql);
        if($result){
          //$row = mysqli_fetch_assoc($result) 이거는 더이상 배열 값이 없으면 null로 됨.
          while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row['M_num']."</td><td>".$row['M_name']."</td><td>".$row['M_password']."</td><td>".$row['M_address']."</td><td>".$row['M_address2']."</td></tr>";
          }  
            
        }
        else {
          echo "<script>alert('정보를 불러오지 못하였습니다.. 메인페이지로 돌아갑니다.');
          location.href='/admin.php'; </script>";
        }
      ?>
    </tbody>
  </table>
  <a href="../admin.php">메인으로 이동5</a>
</body>
</html>