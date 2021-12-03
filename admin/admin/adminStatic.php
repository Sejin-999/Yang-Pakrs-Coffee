<!-- 이 페이지의 경우 나중에 폼을 받을 시, 기능을 넣을 부분만 고려했기에 깔끔하지 않음. -->


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
        <th>날짜</th>
        <th>총 주문 수</th>
        <th>총액</th>
        <!-- <th>주소</th>
        <th>상세주소</th> -->
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
        $sql = "SELECT DATE(`O_date`) AS `Date`, COUNT(MemId) AS '총 주문 수', SUM(O_price) AS Total FROM orders GROUP BY `date`";
             
        $result = mysqli_query($conn, $sql);
        if($result){
          while($row = mysqli_fetch_row($result)){
            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
          }   
        }
      ?>
    </tbody>
    <tbody>
      <?php
        $conn = mysqli_connect(
          'localhost',
          'root',
          '111111',
          'coffee'
        );
        $sqlMonth = "SELECT MONTH(`O_date`) AS `Date`, COUNT(MemId) AS '총 주문 수',
              sum(`O_price`) AS Total
              FROM orders GROUP BY `date`";
             
        $resultMonth = mysqli_query($conn, $sqlMonth);
        if($resultMonth){
          while($rowMonth = mysqli_fetch_row($resultMonth)){
            echo "<tr><td>".$rowMonth[0].'월'."</td><td>".$rowMonth[1]."</td><td>".$rowMonth[2]."</td></tr>";
          } 
        }
      ?>
    </tbody>
    <tbody>
      <?php
        $conn = mysqli_connect(
          'localhost',
          'root',
          '111111',
          'coffee'
        );
        $sqlAll = "SELECT COUNT(MemId) AS '총 주문 수', SUM(O_price) AS Total_sales FROM orders";
             
        $resultAll = mysqli_query($conn, $sqlAll);
        if($resultAll){
          while($rowAll = mysqli_fetch_row($resultAll)){
            echo "<tr><td>".$rowAll[0]."</td><td>".$rowAll[1]."</td></tr>";
          } 
        }
      ?>
    </tbody>
  </table>
  <a href="../admin.php">메인으로 이동</a>
</body>
</html>